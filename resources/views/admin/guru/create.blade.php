@extends('template-admin.layout')
@section('title', 'Tambah Data Guru')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection

@section('konten')
<div class="col">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Data Guru</h5>

            <!-- Vertical Form -->
            <form class="row g-3" method="POST" action="{{ route('guru.store') }}">
                @csrf
                <div class="col-12 mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="number" class="form-control" id="nip" name="nip" placeholder="masukkan nip" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="masukkan username" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password" required>
                        <span class="input-group-text" onclick="togglePassword()">
                            <i id="eyeIcon" class="bi bi-eye"></i>
                        </span>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="form-control" required>
                        <option disabled selected value="">Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="masukkan no_hp" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="masukkan tanggal lahir " required>
                </div>
                <div class="text-end">
                    <a href="{{route('guru.index')}}" class="btn btn-primary">
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
@section('js')
<script>
    function togglePassword() {
        let passwordInput = document.getElementById("password");
        let eyeIcon = document.getElementById("eyeIcon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.replace("bi-eye", "bi-eye-slash");
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.replace("bi-eye-slash", "bi-eye");
        }
    }
</script>

@endsection