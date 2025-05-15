<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\absensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RekapController extends Controller
{
    // Menampilkan rekap absensi untuk siswa yang sedang login
    public function index()
    {
        $siswa = siswa::where('user_id', Auth::id())->first();
        $rekapAbsensi = [];

        if ($siswa) {
            $rekapAbsensi = absensi::where('siswa_id', $siswa->id)->orderBy('tanggal_absen', 'desc')->get();
        }

        return view('siswa.rekap', [
            'siswa' => $siswa,
            'rekapAbsensi' => $rekapAbsensi
        ]);
    }
}
