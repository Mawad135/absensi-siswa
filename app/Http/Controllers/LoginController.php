<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function tampilLogin()
    {
        return view('login', [
            'menu' => 'login',
            'title' => 'Login Pengguna'
        ]);
    }

    function submitLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Cek apakah user ini adalah guru
            $guru = guru::where('username', $user->username)->first();
            if ($guru) {
                return redirect()->route('dashboard-guru');
            }

            // Cek apakah user ini adalah siswa
            $siswa = siswa::where('username', $user->username)->first();
            if ($siswa) {
                return redirect()->route('dashboard-siswa');
            }

            // Jika user adalah admin
            if ($user->level === 'admin') {
                return redirect()->route('dashboard-admin');
            }
        } else {
            return redirect()->back()->withErrors(['login' => 'Username atau Password salah.']);
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}