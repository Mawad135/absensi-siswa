<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\local;
use App\Models\absensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{

     public function laporanBulananGuru(Request $request)
{
    $guru = guru::where('user_id', Auth::id())->first();

    // Ambil semua kelas untuk pilihan dropdown
    $daftar_kelas = local::all();

    // Ambil kelas yang diampu guru (misal relasi: $guru->local_id)
    $kelas_id = $request->input('kelas_id', $guru->local_id ?? null);

    $bulan = $request->input('bulan', date('m'));
    $tahun = $request->input('tahun', date('Y'));

    // Ambil absensi siswa di kelas guru login, pada bulan & tahun yang dipilih
    $laporan = absensi::whereHas('siswa', function($q) use ($kelas_id) {
            if ($kelas_id) {
                $q->where('local_id', $kelas_id);
            }
        })
        ->whereMonth('tanggal_absen', $bulan)
        ->whereYear('tanggal_absen', $tahun)
        ->orderBy('tanggal_absen', 'asc')
        ->get();

             $sakit = $laporan->where('status', 'sakit')->count();
    $izin  = $laporan->where('status', 'izin')->count();
    $alpa  = $laporan->where('status', 'alpa')->count();

    return view('guru.laporan', [
        'menu' => 'laporan',
        'guru' => $guru,
        'laporan' => $laporan,
        'bulan' => $bulan,
        'tahun' => $tahun,
        'sakit' => $sakit,
        'izin' => $izin,
        'alpa' => $alpa,
        'daftar_kelas' => $daftar_kelas
    ]);
}

public function laporanBulananAdmin(Request $request)
{
    // Tidak perlu filter guru, admin bisa lihat semua kelas
    $daftar_kelas = local::all();
    $kelas_id = $request->input('kelas_id', null);
    $bulan = $request->input('bulan', date('m'));
    $tahun = $request->input('tahun', date('Y'));

    $laporan = absensi::whereHas('siswa', function($q) use ($kelas_id) {
            if ($kelas_id) {
                $q->where('local_id', $kelas_id);
            }
        })
        ->whereMonth('tanggal_absen', $bulan)
        ->whereYear('tanggal_absen', $tahun)
        ->orderBy('tanggal_absen', 'asc')
        ->get();

        return view('admin.laporan', [
        'menu' => 'laporan-admin',
        'laporan' => $laporan,
        'bulan' => $bulan,
        'tahun' => $tahun,
        'daftar_kelas' => $daftar_kelas,
        'kelas_id' => $kelas_id
    ]);
}
}