
// filepath: c:\xampp\htdocs\absensi\resources\views\admin\absen\create.blade.php
@extends('template-admin.layout')
@section('title', 'Tambah Data Siswa')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection

@section('konten')
<div class="col">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Absen</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{ route('absen.store2') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="foto" class="form-label">Foto (sedang berada disekolah)</label>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*" required>
                </div>
                <div class="col-12">
                    <label for="siswa_id" class="form-label">Nama Siswa</label>
                    <select name="siswa_id" id="siswa_id" class="form-control" required>
                        <option disabled selected value="">Pilih siswa</option>
                        @foreach($siswa as $s)
                        <option value="{{$s['id']}}">{{$s['nama']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option disabled selected value="">Pilih Status</option>
                        <option value="hadir">Hadir</option>
                        <option value="izin">Izin</option>
                        <option value="alpa">Alpa</option>
                        <option value="sakit">Sakit</option>
                    </select>
                </div>
                <div class="text-end">
                    <a href="{{route('absen.index')}}" class="btn btn-primary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="reset" class="btn btn-warning">
                        <i class="bi bi-arrow-clockwise"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </form><!-- Vertical Form -->
        </div>
    </div>
</div>
@endsection