@extends('template-admin.layout')
@section('title', 'Show Data ' . $user->username)



@section('konten')
<div class="col">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Show Data {{$user->username}}</h5>

            <!-- Vertical Form -->
            <form>
                @csrf
                <div class="col-12">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" disabled>
                </div>
                <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}" disabled>
                </div>
                
                <div class="col-12">
                    <label for="level" class="form-label">Role</label>
                    <input type="text" class="form-control" id="level" name="level" value="{{$user->level}}" disabled>
                </div>

                <br>
                <div class="text-end">
                    <a href="{{route('user.index')}}" class="btn btn-primary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</div>
@endsection