<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\local;
use App\Models\siswa;
use App\Models\jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboardAdmin()
    {
        $jumlahSiswa = siswa::count(); // Menghitung jumlah siswa
        $jumlahGuru = guru::count(); // Menghitung jumlah guru
        $jumlahLocal = local::count(); // Menghitung jumlah local
        $jumlahJurusan = jurusan::count(); // Menghitung jumlah jurusan

        return view('admin.index', [
            'menu' => 'dashboard',
            'jumlahSiswa' => $jumlahSiswa,
            'jumlahGuru' => $jumlahGuru,
            'jumlahLocal' => $jumlahLocal,
            'jumlahJurusan' => $jumlahJurusan
        ]);
    }
    public function dashboardGuru()
    {
        $jumlahSiswa = siswa::count(); // Menghitung jumlah siswa
        $jumlahGuru = guru::count(); // Menghitung jumlah guru
        $jumlahLocal = local::count(); // Menghitung jumlah local
        $jumlahJurusan = jurusan::count(); // Menghitung jumlah jurusan

        // Ambil data guru berdasarkan user yang sedang login
        $guru = guru::where('user_id', Auth::id())->first();

        return view('guru.dashboard', [
            'menu' => 'dashboard',
            'jumlahSiswa' => $jumlahSiswa,
            'jumlahGuru' => $jumlahGuru,
            'jumlahLocal' => $jumlahLocal,
            'jumlahJurusan' => $jumlahJurusan,
            'guru' => $guru // Kirim data guru ke view
        ]);
    }

    public function dashboardSiswa()
{
    // Ambil data siswa berdasarkan user yang sedang login
    $siswa = siswa::where('user_id', Auth::id())->first();

    return view('siswa.dashboard', [
        'menu' => 'dashboard',
        'siswa' => $siswa
    ]);
}
    
}