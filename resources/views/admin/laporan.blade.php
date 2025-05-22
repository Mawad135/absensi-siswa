@extends('template-admin.layout')
@section('title', 'Laporan Bulanan Absensi Siswa')

@section('konten')
<div class="container mt-4">
    <h3 class="mb-3">Laporan Absensi Bulanan</h3>
    <form class="row g-3" method="GET" action="{{ route('laporan.admin') }}">
        <div>
            <label for="kelas_id" class="form-label">Kelas</label>
            <select name="kelas_id" id="kelas_id" class="form-control" style="width:150px;">
                <option value=""> Pilih Kelas </option>
                @foreach($daftar_kelas as $kelas)
                    <option value="{{ $kelas->id }}" {{ (request('kelas_id', $guru->local_id ?? '') == $kelas->id) ? 'selected' : '' }}>
                        {{ $kelas->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="bulan" class="form-label">Bulan</label>
            <input type="number" name="bulan" id="bulan" value="{{ $bulan }}" min="1" max="12" class="form-control" style="width:100px;">
        </div>
        <div>
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" name="tahun" id="tahun" value="{{ $tahun }}" min="2000" max="2100" class="form-control" style="width:100px;">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Tampilkan</button>
        </div>
    </form>
    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header">
                <strong>
                    Rekap Absensi Kelas {{ $guru->local->nama ?? '-' }} Bulan {{ $bulan }} Tahun {{ $tahun }}
                </strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Hadir</th>
                                <th>Izin</th>
                                <th>Sakit</th>
                                <th>Alpa</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @php
                             $grouped = $laporan->groupBy('siswa_id');
                            @endphp
                            @if($grouped->count() > 0)
                                @foreach($grouped as $siswa_id => $items)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $items->first()->siswa->nama ?? '-' }}</td>
                                        <td>{{ $items->where('status', 'hadir')->count() }}</td>
                                        <td>{{ $items->where('status', 'izin')->count() }}</td>
                                        <td>{{ $items->where('status', 'sakit')->count() }}</td>
                                        <td>{{ $items->where('status', 'alpa')->count() }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">Tidak ada data absensi untuk bulan ini.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                 </div>
        </div>
    </div>
</div>
@endsection