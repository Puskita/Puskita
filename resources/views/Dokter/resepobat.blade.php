@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1>Resep Obat</h1>
    <form action="{{ route('resepObat.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="keluhan_id" class="form-label">Pasien</label>
            <select class="form-select" id="keluhan_id" name="keluhan_id">
                <option selected>Pilih Pasien</option>
                @foreach($keluhanPasien as $keluhan)
                    <option value="{{ $keluhan->id }}" 
                        data-nik="{{ $keluhan->pendaftaran->dataPasien->nik }}"
                        data-diagnosa="{{ $keluhan->diagnosa }}"
                        data-tanggal-periksa="{{ $keluhan->created_at->format('Y-m-d') }}">
                        {{ $keluhan->pendaftaran->noRegistrasi }} - ({{ $keluhan->pendaftaran->dataPasien->namaLengkap }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" readonly>
        </div>

        <div class="mb-3">
            <label for="diagnosa" class="form-label">Diagnosa</label>
            <input type="text" class="form-control" id="diagnosa" name="diagnosa" readonly>
        </div>

        <div class="mb-3">
            <label for="tanggal_periksa" class="form-label">Tanggal Periksa</label>
            <input type="text" class="form-control" id="tanggal_periksa" name="tanggal_periksa" readonly>
        </div>

        <h2>Obat</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Dokter</th>
                    <th scope="col">Obat</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Aturan Pakai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- Input untuk dokter_id -->
                    <td>
                        <select class="form-select" id="dokter_id" name="dokter_id" required>
                            <option selected>Pilih Dokter</option>
                            @foreach($dokter as $dok)
                                <option value="{{ $dok->id }}">{{ $dok->namaDokter }}</option>
                            @endforeach
                        </select>
                    </td>

                    <!-- Input untuk obat_id -->
                    <td>
                        <select class="form-select" id="obat_id" name="obat_id" required>
                            <option selected>Pilih Obat</option>
                            @foreach($obat as $d)
                                <option value="{{ $d->id }}">{{ $d->namaObat }}</option>
                            @endforeach
                        </select>
                    </td>

                    <!-- Input untuk jumlah -->
                    <td>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                    </td>

                    <!-- Input untuk aturanPakai -->
                    <td>
                        <input type="text" class="form-control" id="aturanPakai" name="aturanPakai" required>
                    </td>
                </tr>
            </tbody>
        </table>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
<script>
    document.getElementById('keluhan_id').addEventListener('change', function() {
        // Mendapatkan elemen option yang dipilih
        var selectedOption = this.options[this.selectedIndex];
        
        // Mendapatkan data yang disimpan di atribut data-nik, data-diagnosa, dan data-tanggal-periksa
        var nik = selectedOption.getAttribute('data-nik');
        var diagnosa = selectedOption.getAttribute('data-diagnosa');
        var tanggalPeriksa = selectedOption.getAttribute('data-tanggal-periksa');
        
        // Mengisi text field dengan data yang dipilih
        document.getElementById('nik').value = nik;
        document.getElementById('diagnosa').value = diagnosa;
        document.getElementById('tanggal_periksa').value = tanggalPeriksa;
    });
</script>
@endsection