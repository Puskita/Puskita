@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>Data Obat</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Jenis Obat</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Tanggal Kadaluarsa</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataObat as $farmasi)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $farmasi->namaObat }}</td>
                <td>{{ $farmasi->jenisObat }}</td>
                <td>Rp. {{ $farmasi->harga }}</td>
                <td>{{ $farmasi->jumlahStok }}</td>
                <td>{{ $farmasi->tanggalKadaluarsa }}</td>
                <td>
                    <a href="{{ route('dataObat.edit', $farmasi->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('dataObat.destroy', $farmasi->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection