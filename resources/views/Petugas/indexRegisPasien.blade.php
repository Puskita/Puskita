@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Pendaftaran</h1>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('pendaftaranPasien.create') }}" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Registrasi</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftaranPasien as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->noRegistrasi }}</td>
                        <td>{{ $p->namaLengkap }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->noTelp }}</td>
                        <td>{{ $p->jenisKelamin }}</td>
                        <td>
                            <a href="{{ route('pendaftaranPasien.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('pendaftaranPasien.destroy', ['pendaftaranPasien' => $p->id]) }}" method="post" style="display:inline;">
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