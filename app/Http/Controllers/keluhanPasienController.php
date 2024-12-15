<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\keluhanPasien;
use App\Models\pendaftaranPasien;

class keluhanPasienController extends Controller
{

    public function create()
    {
        $pendaftaranPasien = pendaftaranPasien::all();
        $keluhanPasien = keluhanPasien::all();
        return view('keluhanPasien.create', compact('pendaftaranPasien', 'keluhanPasien'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'pendaftaran_id' => 'required|exists:pendaftaran_pasiens,id',
            'keluhan' => 'required|string|max:255',
            'diagnosa' => 'required|string|max:255',
            'riwayatPenyakit' => 'required|string|max:255',
            'pengobatan' => 'required|string|max:255'
        ]);

        keluhanPasien::create($validated);
        return redirect()->route('keluhanPasien.create')->with('success', 'Keluhan pasien berhasil ditambahkan.');
    }

}
