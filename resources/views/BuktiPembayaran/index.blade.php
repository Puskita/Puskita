@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Daftar Bukti Pembayaran</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>No Registrasi</th>
                <th>Nama Pasien</th>
                <th>Layanan</th>
                <th>Dokter</th>
                <th>Nama Obat</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($buktiPembayaran as $index => $pembayaran)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $pembayaran->keluhan->pendaftaran->noRegistrasi ?? '-' }}</td>
                <td>{{ $pembayaran->keluhan->pendaftaran->dataPasien->namaLengkap ?? '-' }}</td>
                <td>{{ $pembayaran->keluhan->pendaftaran->jenisLayanan ?? '-' }}</td>
                <td>{{ $pembayaran->dokter->namaDokter ?? '-' }}</td>
                <td>{{ $pembayaran->obat->namaObat ?? '-' }}</td>
                <td>{{ $pembayaran->jumlah }}</td>
                <td>
                    Rp {{ number_format(($pembayaran->obat->harga ?? 0) * $pembayaran->jumlah, 2, ',', '.') }}
                </td>
                <td>
                    <a href="{{ route('buktiPembayaran.show', $pembayaran->id) }}" class="btn btn-info btn-sm">Lihat</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="9" class="text-center">Data pembayaran belum tersedia.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
