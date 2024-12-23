@extends('layouts.app')

@section('content')
<h1>Edit Jadwal Dokter</h1>
<form action="{{ route('jadwalDokter.update', $jadwal->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="dokter_id" class="form-label">Dokter</label>
        <input type="text" class="form-control" value="{{ $jadwal->dokter->namaDokter }} ({{ $jadwal->dokter->spesialis }})" readonly>
        <input type="hidden" name="dokter_id" value="{{ $jadwal->dokter_id }}">
    </div>

    <div class="mb-3">
        <label for="tanggalMulai" class="form-label">Tanggal Mulai</label>
        <input type="date" class="form-control" id="tanggalMulai" name="tanggalMulai" value="{{ $jadwal->tanggalMulai }}" required>
    </div>
    <div class="mb-3">
        <label for="tanggalSelesai" class="form-label">Tanggal Selesai</label>
        <input type="date" class="form-control" id="tanggalSelesai" name="tanggalSelesai" value="{{ $jadwal->tanggalSelesai }}" required>
    </div>
    <div class="mb-3">
        <label for="ruangan" class="form-label">Ruangan</label>
        <input type="text" class="form-control" id="ruangan" name="ruangan" value="{{ $jadwal->ruangan }}" required>
    </div>
    <a href="{{ route('jadwalDokter.index') }}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
