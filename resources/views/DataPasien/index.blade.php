@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Data Pasien</h1>
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('dataPasien.create') }}" class="btn btn-success">Tambah Data Pasien</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Wilayah</th>
                        <th>No Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataPasien as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->namaLengkap }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->wilayah }}</td>
                        <td>{{ $data->noTelp }}</td>
                        <td>{{ $data->jenisKelamin }}</td>
                        <td>{{ $data->tanggalLahir }}</td>
                        <td>
                            <a href="{{ route('dataPasien.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('dataPasien.destroy', ['dataPasien' => $data->id]) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection