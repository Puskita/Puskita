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
        <div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="umum" name="spesialis" value="UMUM" {{ old('spesialis', $dokter->spesialis) == 'UMUM' ? 'checked' : '' }}>
                <label class="form-check-label" for="umum">UMUM</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="gigi" name="spesialis" value="GIGI" {{ old('spesialis', $dokter->spesialis) == 'GIGI' ? 'checked' : '' }}>
                <label class="form-check-label" for="gigi">GIGI</label>
            </div>
        </div>
    </div>
    <a href="{{ route('dataDokter.index') }}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
