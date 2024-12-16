@extends('layouts.app')
@section('content')
<div class="container">
    <div class="mb-3">
        <h1>Tambah Data Pasien</h1>
    </div>
    <form method="POST" action="{{ route('dataPasien.store') }}">
        @csrf
        <div class="row">
            <!-- Kolom Kiri -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik">
                </div>
                <div class="mb-3">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap">
                </div>
                <div class="mb-3">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir">
                </div>
                <div class="mb-3">
                    <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempatLahir" name="tempatLahir">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="laki" name="jenisKelamin" value="Laki-laki">
                            <label class="form-check-label" for="laki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="perempuan" name="jenisKelamin" value="Perempuan">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kebangsaan</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="wni" name="kebangsaan" value="WNI">
                            <label class="form-check-label" for="wni">WNI</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="wna" name="kebangsaan" value="WNA">
                            <label class="form-check-label" for="wna">WNA</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="2"></textarea>
                </div>
                <div class="mb-3">
                    <label for="wilayah" class="form-label">Wilayah</label>
                    <input type="text" class="form-control" id="wilayah" name="wilayah">
                </div>
                <div class="mb-3">
                    <label for="kode_pos" class="form-label">Kode Pos</label>
                    <input type="text" class="form-control" id="kodePos" name="kodePos">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telp</label>
                    <div class="input-group">
                        <span class="input-group-text">+62</span>
                        <input type="text" class="form-control" id="noTelp" name="noTelp">
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Golongan Darah</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="a" name="goldar" value="A">
                            <label class="form-check-label" for="a">A</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="b" name="goldar" value="B">
                            <label class="form-check-label" for="b">B</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="ab" name="goldar" value="AB">
                            <label class="form-check-label" for="ab">AB</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="o" name="goldar" value="O">
                            <label class="form-check-label" for="o">O</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="islam" name="agama" value="ISLAM">
                            <label class="form-check-label" for="islam">ISLAM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="kristen" name="agama" value="KRISTEN">
                            <label class="form-check-label" for="kristen">KRISTEN</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="katolik" name="agama" value="KATHOLIK">
                            <label class="form-check-label" for="katolik">KATHOLIK</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="hindu" name="agama" value="HINDU">
                            <label class="form-check-label" for="hindu">HINDU</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="budha" name="agama" value="BUDHA">
                            <label class="form-check-label" for="budha">BUDHA</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="khong_hucu" name="agama" value="KHONG HUCU">
                            <label class="form-check-label" for="khong_hucu">KHONG HUCU</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="lainnya" name="agama" value="LAINNYA">
                            <label class="form-check-label" for="lainnya">LAINNYA</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status Perkawinan</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="belum_kawin" name="status" value="BELUM KAWIN">
                            <label class="form-check-label" for="belum_kawin">BELUM KAWIN</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="kawin" name="status" value="KAWIN">
                            <label class="form-check-label" for="kawin">KAWIN</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="cerai_hidup" name="status" value="CERAI HIDUP">
                            <label class="form-check-label" for="cerai_hidup">CERAI HIDUP</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="cerai_mati" name="status" value="CERAI MATI">
                            <label class="form-check-label" for="cerai_mati">CERAI MATI</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="janda" name="status" value="JANDA">
                            <label class="form-check-label" for="janda">JANDA</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label-sm">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('dataPasien.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection