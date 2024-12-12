@extends('layouts.app')
@section('content')
<div class="main-content">
    <h2>Data Diri Pasien</h2>
    
    <div class="patient-info">
        <label>Nama:</label> <input type="text" class="form-control" readonly value="Nama Pasien">
        <label>NIK:</label> <input type="text" class="form-control" readonly value="NIK Pasien">
        <label>Diagnosa:</label> <input type="text" class="form-control" readonly value="Diagnosa Pasien">
        <label>Tanggal Periksa:</label> <input type="text" class="form-control" readonly value="Tanggal Periksa">
    </div>

    <h2>Resep Obat</h2>
    
    <div class="table-container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Obat</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><input type="text" class="form-control" placeholder="Nama Obat"></td>
                    <td><input type="number" class="form-control" placeholder="Jumlah"></td>
                    <td><input type="text" class="form-control" placeholder="Satuan"></td>
                    <td><input type="text" class="form-control" placeholder="Deskripsi"></td>
                </tr>
                <tr>
                    <td>+</td>
                    <td><input type="text" class="form-control" placeholder="Nama Obat"></td>
                    <td><input type="number" class="form-control" placeholder="Jumlah"></td>
                    <td><input type="text" class="form-control" placeholder="Satuan"></td>
                    <td><input type="text" class="form-control" placeholder="Deskripsi"></td>
                </tr>
                <tr>
                    <td>+</td>
                    <td><input type="text" class="form-control" placeholder="Nama Obat"></td>
                    <td><input type="number" class="form-control" placeholder="Jumlah"></td>
                    <td><input type="text" class="form-control" placeholder="Satuan"></td>
                    <td><input type="text" class="form-control" placeholder="Deskripsi"></td>
                </tr>
                <tr>
                    <td>+</td>
                    <td><input type="text" class="form-control" placeholder="Nama Obat"></td>
                    <td><input type="number" class="form-control" placeholder="Jumlah"></td>
                    <td><input type="text" class="form-control" placeholder="Satuan"></td>
                    <td><input type="text" class="form-control" placeholder="Deskripsi"></td>
                </tr>
            </tbody>
        </table>
    </div>

    <button class="btn-save">Simpan</button>
    <button class="btn-back">Kembali</button>
</div>
@endsection