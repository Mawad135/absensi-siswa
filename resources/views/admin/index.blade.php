@extends('template-admin.layout')
@section('title', 'Dashboard Admin')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
@endsection
@section('konten')
<section class="section dashboard">
    <div class="row">

        <!-- Cards Row -->
        <div class="col-12">
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card info-card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Siswa <span class="text-white-50">| Today</span></h5>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3 class="mb-0">{{ $jumlahSiswa }}</h3>
                                    <span class="text-white-50 small">Total siswa yang terdaftar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card info-card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Guru <span class="text-white-50">| Today</span></h5>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3 class="mb-0">{{ $jumlahGuru }}</h3>
                                    <span class="text-white-50 small">Total guru yang terdaftar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card info-card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Kelas <span class="text-white-50">| Today</span></h5>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3 class="mb-0">{{ $jumlahLocal }}</h3>
                                    <span class="text-white-50 small">Total kelas yang terdaftar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card info-card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Jurusan <span class="text-white-50">| Today</span></h5>
                            <div class="d-flex align-items-center">
                                <div>
                                    <h3 class="mb-0">{{ $jumlahJurusan }}</h3>
                                    <span class="text-white-50 small">Total jurusan yang terdaftar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection