@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Edit Data Obat</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('dataObat.update', $obat->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="namaObat" class="form-label">Nama Obat</label>
                    <input type="text" name="namaObat" class="form-control" id="namaObat" value="{{ $obat->namaObat }}" required>
                </div>
                <div class="mb-3">
                    <label for="jenisObat" class="form-label">Jenis Obat</label>
                    <input type="text" name="jenisObat" class="form-control" id="jenisObat" value="{{ $obat->jenisObat }}">
                </div>
                <div class="mb-3">
                    <label for="dosis" class="form-label">Dosis</label>
                    <input type="text" name="dosis" class="form-control" id="dosis" value="{{ $obat->dosis }}">
                </div>
                <div class="mb-3">
                    <label for="satuan" class="form-label">Satuan</label>
                    <input type="text" name="satuan" class="form-control" id="satuan" value="{{ $obat->satuan }}">
                </div>
                <div class="mb-3">
                    <label for="jumlahStok" class="form-label">Jumlah Stok</label>
                    <input type="number" name="jumlahStok" class="form-control" id="jumlahStok" value="{{ $obat->jumlahStok }}" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga" value="{{ $obat->harga }}">
                </div>
                <div class="mb-3">
                    <label for="tanggalKadaluarsa" class="form-label">Tanggal Kedaluwarsa</label>
                    <input type="date" name="tanggalKadaluarsa" class="form-control" id="tanggalKadaluarsa" value="{{ $obat->tanggal_kedaluwarsa }}">
                </div>
                <div class="mb-3">
                    <label for="produsen" class="form-label">Produsen</label>
                    <input type="text" name="produsen" class="form-control" id="produsen" value="{{ $obat->produsen }}">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('dataObat.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
