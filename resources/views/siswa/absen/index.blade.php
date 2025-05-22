@extends('template-siswa.layout')
@section('title', 'Data Absensi Siswa')


@section('konten')
<div class="container-fluid mt-5">
<div class="col">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="m-0 font-weight-bold text-dark">Manajemen Absensi</h3>
                <h5 class="m-0 font-weight-bold text-gray text-primary">
                    Rekap Absensi {{$siswa->nama ?? '-'}}
                </h5>
                 <a href="{{route('absen.create')}}" class="btn btn-success btn-md float-right">
                <span class="icon text-white-100">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Absen</span>
            </a></h3>
        </div>
        @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>

                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @if(!empty($rekapAbsensi) && count($rekapAbsensi) > 0)
                            @foreach($rekapAbsensi as $rekap)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$rekap->tanggal_absen}}</td>
                                <td>{{$rekap->jam_absen}}</td>
                                <td>{{$rekap->status}}</td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
@endsection