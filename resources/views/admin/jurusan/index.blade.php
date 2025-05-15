@extends('template-admin.layout')
@section('title', 'Data jurusan')

@section('konten')
<div class="container-fluid mt-5">
<div class="col">
    <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="m-0 font-weight-bold text-dark">Manajemen Data Jurusan</h3>
            <a href="{{route('jurusan.create')}}" class="btn btn-success btn-md">
                <span class="icon text-white-100">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data Jurusan</span>
            </a>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($jurusan as $dg)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dg->nama}}</td>
                                <td>
                                    <div class="action-btns">
                                        <a href="{{ route('jurusan.show', $dg->id) }}" class='btn btn-outline-primary btn-sm'><i class='fas fa-eye' title="show"></i></a>

                                        <a href="{{route('jurusan.edit',$dg['id'])}}" class='btn btn-outline-warning btn-sm'><i class='fas fa-pencil-alt' title="edit"></i></a>


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