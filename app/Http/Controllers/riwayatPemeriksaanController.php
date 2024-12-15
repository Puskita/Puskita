<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resepObat;

class riwayatPemeriksaanController extends Controller
{
    public function index()
    {
        $riwayat = resepObat::with([
            'keluhan.pendaftaran.dataPasien', // Relasi ke data pasien melalui keluhan dan pendaftaran
            'dokter',                         // Relasi langsung ke data dokter
            'obat'                            // Relasi langsung ke data obat
        ])->get();

        // Mengirim data ke view
        return view('riwayatPemeriksaan.index', compact('riwayat'));
    }
}
