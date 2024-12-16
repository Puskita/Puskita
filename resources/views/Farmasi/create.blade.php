@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Obat</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('dataObat.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="namaObat" class="form-label">Nama Obat</label>
                    <input type="text" name="namaObat" class="form-control" id="namaObat" required>
                </div>
                <div class="mb-3">
                    <label for="jenisObat" class="form-label">Jenis Obat</label>
                    <input type="text" name="jenisObat" class="form-control" id="jenisObat">
                </div>
                <div class="mb-3">
                    <label for="dosis" class="form-label">Dosis</label>
                    <input type="text" name="dosis" class="form-control" id="dosis">
                </div>
                <div class="mb-3">
                    <label for="satuan" class="form-label">Satuan</label>
                    <input type="text" name="satuan" class="form-control" id="satuan">
                </div>
                <div class="mb-3">
                    <label for="jumlahStok" class="form-label">Jumlah Stok</label>
                    <input type="number" name="jumlahStok" class="form-control" id="jumlahStok" required>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga">
                </div>
                <div class="mb-3">
                    <label for="tanggalKadaluarsa" class="form-label">Tanggal Kedaluwarsa</label>
                    <input type="date" name="tanggalKadaluarsa" class="form-control" id="tanggalKadaluarsa">
                </div>
                <div class="mb-3">
                    <label for="produsen" class="form-label">Produsen</label>
                    <input type="text" name="produsen" class="form-control" id="produsen">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('dataObat.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
