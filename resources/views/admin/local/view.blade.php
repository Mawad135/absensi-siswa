@extends('template-admin.layout')
@section('title', 'Show Data ' . $local->nama)



@section('konten')
<div class="col">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Show Data {{$local->nama}}</h5>

            <!-- Vertical Form -->
            <form>
                @csrf
                <div class="col-12">
                    <label for="nama" class="form-label">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$local->nama}}" disabled>
                </div>
                <div class="col-12">
                    <label for="wali_kelas" class="form-label">Wali Kelas</label>
                    <input type="text" class="form-control" id="wali_kelas" name="wali_kelas" value="{{$local->guru->nama}}" disabled>
                </div>


                <br>
                <div class="text-end">
                    <a href="{{route('local.index')}}" class="btn btn-primary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</div>
@endsection