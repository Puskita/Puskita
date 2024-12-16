@extends('layouts.app')

@section('content')
<h1>Edit Dokter</h1>
<form action="{{ route('dataDokter.update', $dokter->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="namaDokter" class="form-label">Nama Dokter</label>
        <input type="text" class="form-control" id="namaDokter" name="namaDokter" value="{{ $dokter->namaDokter }}" required>
    </div>
    <div class="mb-3">
        <label for="spesialis" class="form-label">Spesialis</label>
        <input type="text" class="form-control" id="spesialis" name="spesialis" value="{{ $dokter->spesialis }}" required>
    </div>
    <a href="{{ route('dataDokter.index') }}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
