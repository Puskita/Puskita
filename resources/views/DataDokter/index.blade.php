@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Daftar Dokter</h1>
    <a href="{{ route('dataDokter.create') }}" class="btn btn-primary mb-3">Tambah Dokter</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataDokter as $dokter)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dokter->namaDokter }}</td>
                <td>{{ $dokter->spesialis }}</td>
                <td>
                    <a href="{{ route('dataDokter.edit', $dokter->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dataDokter.destroy', $dokter->id) }}" method="POST" style="display:inline;">
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