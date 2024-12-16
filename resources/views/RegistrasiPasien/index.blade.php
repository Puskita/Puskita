@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="my-4">Data Registrasi Pasien</h1>

    <!-- Form Pencarian -->
    <form action="{{ route('pendaftaranPasien.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <!-- Button untuk Registrasi Pasien -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('pendaftaranPasien.create') }}" class="btn btn-success">Registrasi Pasien</a>
    </div>

    <!-- Menampilkan Data Registrasi Pasien dalam Card -->
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>No Registrasi</th>
                <th>Nama Pasien</th>
                <th>Jenis Layanan</th>
                <th>Dokter</th>
                <th>Jadwal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendaftaranPasien as $registrasi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $registrasi->noRegistrasi }}</td>
                <td>{{ $registrasi->dataPasien->namaLengkap }}</td>
                <td>{{ $registrasi->jenisLayanan }}</td>
                <td>{{ $registrasi->jadwalDokter->dokter->namaDokter ?? '-' }}</td>
                <td>
                    {{ $registrasi->jadwalDokter->tanggalMulai ?? '-' }} - 
                    {{ $registrasi->jadwalDokter->tanggalSelesai ?? '-' }}
                </td>
                <td>
                    <a href="{{ route('pendaftaranPasien.show', $registrasi->id) }}" class="btn btn-warning btn-sm">Detail</a>
                    <form action="{{ route('pendaftaranPasien.destroy', $registrasi->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection