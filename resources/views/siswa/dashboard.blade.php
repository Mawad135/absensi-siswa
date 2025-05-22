@extends('template-siswa.layout')
@section('title', 'Dashboard Siswa')

@section('konten')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-11 mx-auto">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Rekap Absensi {{ $siswa->nama ?? '-' }}</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
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
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $rekap->tanggal_absen }}</td>
                                            <td>{{ $rekap->jam_absen }}</td>
                                            <td>
                                                @if($rekap->status == 'hadir')
                                                    <span class="badge bg-success">Hadir</span>
                                                @elseif($rekap->status == 'izin')
                                                    <span class="badge bg-warning text-dark">Izin</span>
                                                @elseif($rekap->status == 'alpa')
                                                    <span class="badge bg-danger">Alpa</span>
                                                @elseif($rekap->status == 'sakit')
                                                    <span class="badge bg-info text-white">Sakit</span>
                                                @else
                                                    <span class="badge bg-secondary">{{ ucfirst($rekap->status) }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                     @else
                                    <tr>
                                        <td colspan="4">Tidak ada data absensi.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection