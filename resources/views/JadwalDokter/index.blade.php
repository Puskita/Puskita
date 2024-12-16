@extends('layouts.app')

@section('content')
<h1>Daftar Jadwal Dokter</h1>
<a href="{{ route('jadwalDokter.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Dokter</th>
            <th>Jadwal</th>
            <th>Ruangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jadwalDokter as $jadwal)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $jadwal->dokter->namaDokter }}</td>
            <td>{{ $jadwal->tanggalMulai }} - {{ $jadwal->tanggalSelesai }}</td>
            <td>{{ $jadwal->ruangan }}</td>
            <td>
                <a href="{{ route('jadwalDokter.edit', $jadwal->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('jadwalDokter.destroy', $jadwal->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
