@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>Tambah Dokter</h1>
    <form action="{{ route('dataDokter.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="namaDokter" class="form-label">Nama Dokter</label>
            <input type="text" class="form-control" id="namaDokter" name="namaDokter" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Spesialis</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="spesialis" id="spesialis1" value="Umum" required>
                <label class="form-check-label" for="spesialis1">
                    Umum
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="spesialis" id="spesialis2" value="Gigi" required>
                <label class="form-check-label" for="spesialis2">
                    Gigi
                </label>
            </div>
        </div>
        <a href="{{ route('dataDokter.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection