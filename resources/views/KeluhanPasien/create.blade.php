@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Keluhan Pasien</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('keluhanPasien.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="pendaftaran_id" class="form-label">Nama Pasien</label>
                    <select class="form-select" id="pendaftaran_id" name="pendaftaran_id">
                        <option selected>Pilih Pasien</option>
                        @foreach($pendaftaranPasien as $pasien)
                            <option value="{{ $pasien->id }}">{{ $pasien->noRegistrasi }} - ({{ $pasien->dataPasien->namaLengkap }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="keluhan" class="form-label">Keluhan</label>
                    <input type="text" name="keluhan" class="form-control" id="keluhan">
                </div>
                <div class="mb-3">
                    <label for="diagnosa" class="form-label">Diagnosa</label>
                    <input type="text" name="diagnosa" class="form-control" id="diagnosa">
                </div>
                <div class="mb-3">
                    <label for="riwayatPenyakit" class="form-label">Riwayat Penyakit</label>
                    <input type="text" name="riwayatPenyakit" class="form-control" id="riwayatPenyakit">
                </div>
                <div class="mb-3">
                    <label for="pengobatan" class="form-label">Pengobatan yang sedang dijalani</label>
                    <input type="text" name="pengobatan" class="form-control" id="pengobatan">
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection