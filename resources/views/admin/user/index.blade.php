@extends('template-admin.layout')
@section('title', 'Data user')

@section('konten')
<div class="container-fluid mt-5">
<div class="col">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="m-0 font-weight-bold text-dark">Manajemen Data User</h3>
            <a href="{{route('user.create')}}" class="btn btn-success btn-md">
                <span class="icon text-white-100">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data User</span>
            </a>
        </div>

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        </div>
        @endif

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                               
                                <th>Username</th>
                                <th>Role</th>

                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($datauser as $ds)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                
                                <td>{{$ds->username}}</td>
                                <td>{{$ds->level}}</td>

                                <td>
                                    <div class="action-btns">
                                        <a href="{{ route('user.show', $ds->id) }}" class='btn btn-outline-primary btn-sm'><i class='fas fa-eye' title="show"></i></a>

                                        <a href="{{route('user.edit',$ds['id'])}}" class='btn btn-outline-warning btn-sm'><i class='fas fa-pencil-alt' title="edit"></i></a>

                                        <form action="{{route('user.destroy',$ds['id'])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class='btn btn-outline-danger btn-sm'><i class='far fa-trash-alt' title="hapus" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')"></i></button>
                                        </form>
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