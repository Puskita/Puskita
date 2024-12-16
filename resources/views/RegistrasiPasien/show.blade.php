@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>PUSKITA</h3>
                    <h4>Bukti Registrasi</h4>
                </div>
                <div class="card-body">
                    <p><strong>NIK:</strong> {{ $pendaftaranPasien->dataPasien->nik }}</p>
                    <p><strong>Nama Lengkap:</strong> {{ $pendaftaranPasien->dataPasien->namaLengkap }}</p>
                    <p><strong>Tanggal Lahir:</strong> {{ \Carbon\Carbon::parse($pendaftaranPasien->dataPasien->tanggalLahir)->format('d/m/Y') }}</p>
                    <p><strong>Jenis Kelamin:</strong> {{ $pendaftaranPasien->dataPasien->jenisKelamin }}</p>
                    <p><strong>Alamat:</strong> {{ $pendaftaranPasien->dataPasien->alamat }}</p>
                    <p><strong>No. Telp:</strong> {{ $pendaftaranPasien->dataPasien->noTelp }}</p>
                    <p><strong>No. Registrasi:</strong> {{ $pendaftaranPasien->noRegistrasi }}</p>
                    <p><strong>Waktu Registrasi:</strong> {{ \Carbon\Carbon::parse($pendaftaranPasien->created_at)->format('d/m/Y H:i') }}</p>
                    <p><strong>Jenis Layanan Kesehatan:</strong> {{ $pendaftaranPasien->jenisLayanan }}</p>
                    
                    <div class="row mt-4">
                        <div class="col text-center">
                            <!-- Menampilkan Gambar Barcode -->
                            <img src="{{ asset('images/barcode.jpg') }}" alt="Barcode" class="img-fluid">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col text-center">
                            <h5>Nomor Antrean</h5>
                            <p>{{ str_pad($pendaftaranPasien->antrean, 3, '0', STR_PAD_LEFT) }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="javascript:window.print();" class="btn btn-success">Cetak</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
