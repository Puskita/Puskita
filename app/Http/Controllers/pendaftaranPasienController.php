<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaranPasien;
use App\Models\dataPasien;
use App\Models\jadwalDokter;
use Barryvdh\DomPDF\Facade\PDF;

class pendaftaranPasienController extends Controller
{
    public function index(Request $request)
    {
        $query = pendaftaranPasien::with('dataPasien'); 

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('noRegistrasi', 'like', "%{$search}%")
                ->orWhereHas('dataPasien', function ($q) use ($search) {
                    $q->where('namaLengkap', 'like', "%{$search}%");
                });
        }

        $pendaftaranPasien = $query->get();

        return view('RegistrasiPasien.index', compact('pendaftaranPasien'));
    }

    public function create()
    {
        $dataPasien = DataPasien::all();
        $jadwalDokter = JadwalDokter::with('dokter')->get();
        $noRegistrasi = 'REG-' . strtoupper(uniqid());

        return view('RegistrasiPasien.create', compact('noRegistrasi', 'dataPasien', 'jadwalDokter'));
    }


    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'noRegistrasi' => 'required|string',
            'pasien_id' => 'required|exists:data_pasiens,id',
            'jadwal_id' => 'required|exists:jadwal_dokters,id',
            'jenisLayanan' => 'nullable|string|in:UMUM,GIGI',
        ]);

        // Menyimpan data pendaftaran pasien
        PendaftaranPasien::create([
            'noRegistrasi' => $validated['noRegistrasi'],
            'pasien_id' => $validated['pasien_id'],
            'jadwal_id' => $validated['jadwal_id'],
            'jenisLayanan' => $validated['jenisLayanan'],
        ]);

        return redirect()->route('pendaftaranPasien.index')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id){
        $pendaftaranPasien = PendaftaranPasien::findOrFail($id);
        return view('RegistrasiPasien.show', compact('pendaftaranPasien'));
    }

    public function downloadPDF($id){
        $pendaftaranPasien = pendaftaranPasien::findOrFail($id);
        $pdf = PDF::loadView('RegistrasiPasien.pdf', compact('pendaftaranPasien'));
        return $pdf->download('registrasi-pasien.pdf');
    }
}
