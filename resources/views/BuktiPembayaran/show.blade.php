@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-white text-center">
            <h4><strong>PUSKITA</strong> <br>Bukti Pembayaran</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Detail Pembayaran</h5>
            <table class="table table-bordered">
                <tr>
                    <th>No Registrasi:</th>
                    <td>{{ $resepObat->keluhan->pendaftaran->noRegistrasi ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Nama Pasien:</th>
                    <td>{{ $resepObat->keluhan->pendaftaran->dataPasien->namaLengkap ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Layanan:</th>
                    <td>{{ $layanan }}</td>
                </tr>
                <tr>
                    <th>Dokter:</th>
                    <td>{{ $resepObat->dokter->namaDokter ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Nama Obat:</th>
                    <td>{{ $resepObat->obat->namaObat ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Harga Obat:</th>
                    <td>Rp {{ number_format($resepObat->obat->harga ?? 0, 2, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Jumlah:</th>
                    <td>{{ $resepObat->jumlah }}</td>
                </tr>
                <tr>
                    <th>Total Harga:</th>
                    <td>
                        Rp {{ number_format(($resepObat->obat->harga ?? 0) * $resepObat->jumlah, 2, ',', '.') }}
                    </td>
                </tr>
                <tr>
                    <th>Aturan Pakai:</th>
                    <td>{{ $resepObat->aturanPakai }}</td>
                </tr>
                <tr>
                    <th>Status Pembayaran:</th>
                    <td><strong>LUNAS</strong></td>
                </tr>
            </table>
            <div class="card-footer text-end">
                <a href="javascript:window.print();" class="btn btn-success">Cetak</a>
            </div>
        </div>
    </div>
</div>
@endsection
