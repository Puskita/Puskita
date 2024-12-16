<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resepObat;
use App\Models\dataObat;
use App\Models\keluhanPasien;
use App\Models\dataDokter;

class resepObatController extends Controller
{
    public function index(){
        $resepObat = resepObat::all();
        return view('Dokter.index', compact('resepObat'));
    }

    public function create(){
        $keluhanPasien = keluhanPasien::with('pendaftaran.dataPasien')->get();
        $resepObat = resepObat::all();
        $dokter = dataDokter::all();
        $obat = dataObat::all();
        return view('Dokter.resepobat', compact('keluhanPasien', 'resepObat', 'dokter', 'obat'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'keluhan_id' => 'required|exists:keluhan_pasiens,id',
            'obat_id' => 'required|exists:data_obats,id',
            'dokter_id' => 'required|exists:data_dokters,id',
            'jumlah' => 'required|integer',
            'aturanPakai' => 'required|string|max:255'
        ]);

        resepObat::create($validated);
        return redirect()->route('resepObat.create')->with('success', 'Resep obat berhasil ditambahkan.');
    }
}
