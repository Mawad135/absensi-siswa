<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\absensi;
use App\Models\siswa;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class AbsenController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $siswa = siswa::where('username', Auth::user()->username)->firstOrFail();
        $rekapAbsensi = absensi::where('siswa_id', $siswa->id)->with('guru')->get();

        return view('siswa.absen.index', [
            'menu' => 'absen',
            'title' => 'Rekap Absensi ' . $siswa->nama,
            'siswa' => $siswa,
            'rekapAbsensi' => $rekapAbsensi
        ]);
    }

    public function create(){
        return view('siswa.absen.create', [
            'menu' => 'absen',
        ]);
    }

    
// filepath: c:\xampp\htdocs\absensi\app\Http\Controllers\AbsenController.php
public function store(Request $request)
{
    // Ambil data siswa berdasarkan username yang login
    $siswa = Siswa::where('username', Auth::user()->username)->firstOrFail();

    // Validasi file foto
    $request->validate([
        'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'guru_id' => 'nullable',
    ]);

        $nm = $request->foto;
        $namaFile = $nm->getClientOriginalName();

    // Simpan data absensi ke database
    Absensi::create([
        'tanggal_absen' => now()->toDateString(),
        'jam_absen' => now()->toTimeString(),
        'status' => 'Hadir',
        'foto' => $namaFile, // Simpan path dengan 'storage/'
        'siswa_id' => $siswa->id,
        
    ]);
        $nm->move(public_path() . '/foto', $namaFile);
    return redirect()->route('absen.index')->with('success', 'Absensi berhasil disimpan!');
}

    public function index2()
    {
        $absensi = absensi::all();
        return view('admin.absen.index', [
            'menu' => 'absen',
            'absensi' => $absensi
        ]);
    }

    public function destroy($id)
    {
        $absensi =absensi::find($id);
        $absensi->delete();
        return redirect(route('absen.index2'));
    }

    public function create2()
    {
        $siswa = siswa::all();
        return view('admin.absen.create', [
            'menu' => 'absen',
            'siswa' => $siswa
        ]);
    }

    public function store2(Request $request)
    {
        // Validasi input
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'siswa_id' => 'required',
            'status' => 'required|in:hadir,izin,alpa,sakit',
            'guru_id' => 'nullable',
        ]);

        // Simpan file foto ke folder 'public/foto_siswa'
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('public/foto_siswa');
            $foto = str_replace('public/', 'storage/', $foto); // Ubah 'public/' menjadi 'storage/'
        } else {
            $foto = null;
        }

        // Simpan data absensi ke database
        Absensi::create([
            'tanggal_absen' => now()->toDateString(),
            'jam_absen' => now()->toTimeString(),
            'status' => $request->status,
            'foto' => $foto, // Simpan path dengan 'storage/'
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
        ]);

        return redirect()->route('absen.index2')->with('success', 'Absensi berhasil disimpan!');
    }

    public function edit2($id)
    {
        $absensi = Absensi::findOrFail($id);
        return view('admin.absen.edit', [
            'menu' => 'absen',
            'absensi' => $absensi
        ]);
    }

    public function update2(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'status' => 'required|in:hadir,izin,alpa,sakit',
        ]);

        // Temukan data absensi berdasarkan ID
        $absensi = Absensi::findOrFail($id);

        // Update status absensi
        $absensi->update([
            'status' => $request->status,
        ]);

        return redirect()->route('absen.index2')->with('success', 'Status absensi berhasil diperbarui!');
    }

    public function index3()
    {
        $absensi = absensi::all();
        return view('guru.absen.index', [
            'menu' => 'absen',
            'absensi' => $absensi
        ]);
    }

    public function create3()
    {
        $siswa = siswa::all();
        return view('guru.absen.create', [
            'menu' => 'absen',
            'siswa' => $siswa
        ]);
    }

    public function store3(Request $request)
    {
        // Validasi input
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'siswa_id' => 'required',
            'status' => 'required|in:hadir,izin,alpa,sakit',
            'guru_id' => 'nullable',
        ]);

        // Simpan file foto ke folder 'public/foto_siswa'
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('public/foto_siswa');
            $foto = str_replace('public/', 'storage/', $foto); // Ubah 'public/' menjadi 'storage/'
        } else {
            $foto = null;
        }

        // Simpan data absensi ke database
        Absensi::create([
            'tanggal_absen' => now()->toDateString(),
            'jam_absen' => now()->toTimeString(),
            'status' => $request->status,
            'foto' => $foto, // Simpan path dengan 'storage/'
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
        ]);

        return redirect()->route('absen.index3')->with('success', 'Absensi berhasil disimpan!');
    }

    public function edit3($id)
    {
        $absensi = Absensi::findOrFail($id);
        return view('guru.absen.edit', [
            'menu' => 'absen',
            'absensi' => $absensi
        ]);
    }

    public function update3(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'status' => 'required|in:hadir,izin,alpa,sakit',
        ]);

        // Temukan data absensi berdasarkan ID
        $absensi = Absensi::findOrFail($id);

        

        // Update status dan guru_id absensi
        $absensi->update([
            'status' => $request->status,
            
        ]);

        return redirect()->route('absen.index3')->with('success', 'Status absensi berhasil diperbarui!');
    }
}