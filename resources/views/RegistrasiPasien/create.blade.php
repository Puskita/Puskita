@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Registrasi Pasien</h1>
    <form method="POST" action="{{ route('pendaftaranPasien.store') }}">
        @csrf
        <div class="row">
                <div class="mb-3">
                    <label for="noRegistrasi" class="form-label">No. Registrasi</label>
                    <input type="text" class="form-control" id="noRegistrasi" name="noRegistrasi" value="{{ old('noRegistrasi', $noRegistrasi) }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="pasien_id">Nama Pasien</label>
                    <select class="form-select" id="pasien_id" name="pasien_id">
                        <option selected>Pilih Pasien</option>
                            @foreach($dataPasien as $dp)
                                <option value="{{ $dp->id }}">{{ $dp->namaLengkap }}</option>
                            @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Layanan</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="umum" name="jenisLayanan" value="UMUM" onclick="filterDokter()">
                            <label class="form-check-label" for="umum">UMUM</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="gigi" name="jenisLayanan" value="GIGI" onclick="filterDokter()">
                            <label class="form-check-label" for="gigi">GIGI</label>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="jadwal_id" class="form-label">Dokter</label>
                    <select class="form-select" id="jadwal_id" name="jadwal_id">
                        <option selected>Pilih Dokter</option>
                        @foreach($jadwalDokter as $jadwal)
                            <option value="{{ $jadwal->id }}" class="dokter-option" data-spesialis="{{ $jadwal->dokter->spesialis }}">
                                {{ $jadwal->dokter->namaDokter }} ({{ $jadwal->tanggalMulai }} - {{ $jadwal->tanggalSelesai }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('pendaftaranPasien.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
function filterDokter() {
    const jenisLayanan = document.querySelector('input[name="jenisLayanan"]:checked').value;
    const dokterOptions = document.querySelectorAll('.dokter-option');

    // Iterasi melalui semua option dokter dan tampilkan hanya yang sesuai
    dokterOptions.forEach(option => {
        if (option.getAttribute('data-spesialis') === jenisLayanan) {
            option.style.display = 'block'; // Tampilkan option
        } else {
            option.style.display = 'none'; // Sembunyikan option
        }
    });

    // Reset pilihan dokter saat layanan diubah
    document.getElementById('jadwal_id').selectedIndex = 0;
}
</script>
@endsection