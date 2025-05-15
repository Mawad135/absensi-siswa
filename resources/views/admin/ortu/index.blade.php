
@extends('template-admin.layout')
@section('title', 'Data Ortu Siswa')

@section('konten')
<div class="container-fluid mt-5">
<div class="col">
    <div class="card">
        <div class="card-header">
            <h3 class="m-0 font-weight-bold text-dark">Manajemen Data Orangtua</h3>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Nama Orang Tua</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($ortu as $dg)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dg->nama}}</td>
                                <td>{{$dg->nama_wm}}</td>
                                <td>
                                    <div class="action-btns">
                                        <a href="{{ route('ortu.show', $dg->id) }}" class='btn btn-outline-primary btn-sm'><i class='fas fa-eye' title="show"></i></a>
                                    </div>
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