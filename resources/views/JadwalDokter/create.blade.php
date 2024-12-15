@extends('layouts.app')

@section('content')
<h1>Tambah Jadwal Dokter</h1>
<form action="{{ route('jadwalDokter.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="dokter_id" class="form-label">Dokter</label>
        <select class="form-select" id="dokter_id" name="dokter_id">
            <option selected>Pilih Dokter</option>
            @foreach($dataDokter as $dokter)
            <option value="{{ $dokter->id }}">{{ $dokter->namaDokter }} ({{ $dokter->spesialis }})</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="tanggalMulai" class="form-label">Tanggal Mulai</label>
        <input type="date" class="form-control" id="tanggalMulai" name="tanggalMulai" required>
    </div>
    <div class="mb-3">
        <label for="tanggalSelesai" class="form-label">Tanggal Selesai</label>
        <input type="date" class="form-control" id="tanggalSelesai" name="tanggalSelesai" required>
    </div>    
    <div class="mb-3">
        <label for="ruangan" class="form-label">Ruangan</label>
        <input type="text" class="form-control" id="ruangan" name="ruangan" required>
    </div>
    <a href="{{ route('jadwalDokter.index') }}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
