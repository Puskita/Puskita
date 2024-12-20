<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwalDokter;
use App\Models\dataDokter;

class jadwalDokterController extends Controller
{
    public function index()
    {
        $jadwalDokter = JadwalDokter::with('dokter')->get();
        return view('JadwalDokter.index', compact('jadwalDokter'));
    }

    public function create()
    {
        $dataDokter = DataDokter::all();
        return view('JadwalDokter.create', compact('dataDokter'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'dokter_id' => 'required|exists:data_dokters,id',
            'tanggalMulai' => 'required|date|date_format:Y-m-d',
            'tanggalSelesai' => 'required|date|date_format:Y-m-d|after:tanggalMulai',
            'ruangan' => 'required|string|max:255',
        ]);

        JadwalDokter::create($validated);
        return redirect()->route('jadwalDokter.index')->with('success', 'Jadwal dokter berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jadwal = JadwalDokter::findOrFail($id);
        $dataDokter = DataDokter::all();
        return view('JadwalDokter.edit', compact('jadwal', 'dataDokter'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'dokter_id' => 'required|exists:data_dokters,id',
            'tanggalMulai' => 'required|date|date_format:Y-m-d',
            'tanggalSelesai' => 'required|date|date_format:Y-m-d|after:tanggalMulai',
            'ruangan' => 'required|string|max:255',
        ]);

        $jadwal = JadwalDokter::findOrFail($id);
        $jadwal->update($validated);
        return redirect()->route('jadwalDokter.index')->with('success', 'Jadwal dokter berhasil diupdate.');
    }

    public function destroy($id)
    {
        $jadwal = JadwalDokter::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwalDokter.index')->with('success', 'Jadwal dokter berhasil dihapus.');
    }
}
