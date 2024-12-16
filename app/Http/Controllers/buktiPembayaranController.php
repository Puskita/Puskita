<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resepObat;
use Barryvdh\DomPDF\Facade\PDF;

class buktiPembayaranController extends Controller
{
    public function index()
    {
        $buktiPembayaran = resepObat::with([
            'keluhan.pendaftaran.dataPasien',
            'dokter',
            'obat'
        ])->get();

        return view('BuktiPembayaran.index', compact('buktiPembayaran'));
    }

    public function show($id)
    {
        $resepObat = resepObat::with([
            'keluhan.pendaftaran.dataPasien',
            'obat',
            'dokter'
        ])->findOrFail($id);

        $layanan = $resepObat->keluhan->pendaftaran->jenisLayanan ?? '-';

        return view('buktiPembayaran.show', compact('resepObat', 'layanan'));
    }

    public function downloadPDF($id)
    {
        $resepObat = resepObat::with([
            'keluhan.pendaftaran.dataPasien',
            'obat',
            'dokter'
        ])->findOrFail($id);
        
        $layanan = $resepObat->keluhan->pendaftaran->jenisLayanan ?? '-';

        $pdf = PDF::loadView('BuktiPembayaran.pdf', compact('resepObat', 'layanan'));
        return $pdf->download('buktiPembayaran.pdf');
    }
}
