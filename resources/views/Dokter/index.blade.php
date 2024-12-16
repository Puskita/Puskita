@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Daftar Resep Obat</h1>
    <!-- Tabel Daftar Resep Obat -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">No Registrasi</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Obat</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aturan Pakai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resepObat as $index => $resep)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $resep->keluhan->pendaftaran->noRegistrasi }}</td>
                    <td>{{ $resep->keluhan->pendaftaran->dataPasien->namaLengkap }}</td>
                    <td>{{ $resep->dokter->namaDokter }}</td>
                    <td>{{ $resep->obat->namaObat }}</td>
                    <td>{{ $resep->jumlah }}</td>
                    <td>{{ $resep->aturanPakai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
