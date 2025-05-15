@extends('template-guru.layout')
@section('title', 'Data Absensi Siswa')

@section('konten')
<div class="container-fluid mt-5">
<div class="col">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="m-0 font-weight-bold text-dark">Manajemen Data Absensi</h3>
            <a href="{{route('absen.create3')}}" class="btn btn-success btn-md">
                <span class="icon text-white-100">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Absen</span>
            </a>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Status</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($absensi as $absen)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $absen->siswa->nama ?? '-' }}</td>
                                <td>{{ $absen->tanggal_absen }}</td>
                                <td>{{ $absen->jam_absen }}</td>
                                <td>{{ $absen->status}}</td>
                                <td>
                                    <img src="{{ asset('foto/'.$absen->foto) }}" alt="Foto" width="100" class="rounded">

                                </td>
                                <td class="action-btns">
                                    <a href="{{route('absen.edit3',$absen['id'])}}" class='btn btn-outline-warning btn-sm'><i class='fas fa-pencil-alt' title="edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection