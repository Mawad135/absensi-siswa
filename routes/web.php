<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/registrasi', [LoginController::class, 'tampilRegistrasi'])->name('registrasi');
Route::post('/registrasi/submit', [LoginController::class, 'submitRegistrasi'])->name('registrasi.submit');
Route::get('/login', [LoginController::class, 'tampilLogin'])->name('login');
Route::post('/login/submit', [LoginController::class, 'submitLogin'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboardAdmin', [DashboardController::class, 'dashboardAdmin'])->name('dashboard-admin');
    Route::resource('siswa', SiswaController::class);
    Route::resource('local', LocalController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('ortu', OrtuController::class);
    Route::resource('user', UserController::class);
    Route::get('/absensi', [AbsenController::class, 'index2'])->name('absen.index2');
    Route::get('/absensi/create', [AbsenController::class, 'create2'])->name('absen.create2');
    Route::post('/absensi/store', [AbsenController::class, 'store2'])->name('absen.store2');
    Route::get('/absensi/{absensi}/edit', [AbsenController::class, 'edit2'])->name('absen.edit2');
    Route::put('/absensi/{absensi}', [AbsenController::class, 'update2'])->name('absen.update2');
    Route::get('/laporan-admin', [LaporanController::class, 'laporanBulananAdmin'])->name('laporan.admin');

    Route::get('/dashboard', [DashboardController::class, 'dashboardSiswa'])->name('dashboard-siswa');
    Route::resource('absen', AbsenController::class);

    Route::get('/dashboardGuru', [DashboardController::class, 'dashboardGuru'])->name('dashboard-guru');
    Route::get('/absens', [AbsenController::class, 'index3'])->name('absen.index3');
    Route::get('/absens/create', [AbsenController::class, 'create3'])->name('absen.create3');
    Route::post('/absens/store', [AbsenController::class, 'store3'])->name('absen.store3');
    Route::get('/absens/{absensi}/edit', [AbsenController::class, 'edit3'])->name('absen.edit3');
    Route::put('/absens/{absensi}', [AbsenController::class, 'update3'])->name('absen.update3');
    Route::get('/laporan', [LaporanController::class, 'laporanBulananGuru'])->name('laporan.guru');
});