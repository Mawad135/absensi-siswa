
// filepath: c:\xampp\htdocs\absensi\resources\views\admin\absen\edit.blade.php
@extends('template-guru.layout')
@section('title', 'Edit Status Absensi')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection

@section('konten')
<div class="col">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Status Absensi</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{ route('absen.update3', $absensi->id) }}">
                @csrf
                @method('PUT')
                <div class="col-12 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option disabled selected value="">Pilih Status</option>
                        <option value="hadir" {{ $absensi->status == 'hadir' ? 'selected' : '' }}>Hadir</option>
                        <option value="izin" {{ $absensi->status == 'izin' ? 'selected' : '' }}>Izin</option>
                        <option value="alpa" {{ $absensi->status == 'alpa' ? 'selected' : '' }}>Alpa</option>
                        <option value="sakit" {{ $absensi->status == 'sakit' ? 'selected' : '' }}>Sakit</option>
                    </select>
                </div>
                <div class="text-end">
                    <a href="{{ route('absen.index2') }}" class="btn btn-primary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </form><!-- Vertical Form -->
        </div>
    </div>
</div>
@endsection