@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>Riwayat Pemeriksaan</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>No Registrasi</th>
                <th>NIK</th>
                <th>Nama Pasien</th>
                <th>Nama Dokter</th>
                <th>Nama Obat</th>
                <th>Tanggal Periksa</th>
                <th>Jumlah</th>
                <th>Aturan Pakai</th>
            </tr>
        </thead>
        <tbody>
            @forelse($riwayat as $index => $resep)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $resep->keluhan->pendaftaran->noRegistrasi ?? '-' }}</td>
                    <td>{{ $resep->keluhan->pendaftaran->dataPasien->nik ?? '-' }}</td>
                    <td>{{ $resep->keluhan->pendaftaran->dataPasien->namaLengkap ?? '-' }}</td>
                    <td>{{ $resep->dokter->namaDokter ?? '-' }}</td>
                    <td>{{ $resep->obat->namaObat ?? '-' }}</td>
                    <td>{{ $resep->keluhan->created_at->format('d-m-Y') ?? '-' }}</td>
                    <td>{{ $resep->jumlah }}</td>
                    <td>{{ $resep->aturanPakai }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Data tidak tersedia</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection