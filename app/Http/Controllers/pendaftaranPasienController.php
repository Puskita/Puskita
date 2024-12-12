<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaranPasien;

class pendaftaranPasienController extends Controller
{
    public function index()
    {
        $pendaftaranPasien = pendaftaranPasien::all();
        return view('Petugas.indexRegisPasien', compact('pendaftaranPasien'));
    }

    public function create()
    {
        $noRegistrasi = 'REG-' . strtoupper(uniqid());
        return view('Petugas.createRegisPasien', compact('noRegistrasi'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nik' => 'required|numeric',
            'namaLengkap' => 'required|string|max:255',
            'tanggalLahir' => 'required|date',
            'tempatLahir' => 'required|string|max:255',
            'jenisKelamin' => 'required|string',
            'kebangsaan' => 'required|string',
            'alamat' => 'required|string',
            'wilayah' => 'required|string',
            'kodePos' => 'required|numeric',
            'noTelp' => 'required|string',
            'goldar' => 'nullable|string',
            'agama' => 'nullable|string',
            'status' => 'nullable|string',
            'pekerjaan' => 'nullable|string',
        ]);

        // Simpan data ke database (contoh: model `PendaftaranPasien`)
        PendaftaranPasien::create($validated);

        // Redirect ke halaman lain dengan pesan sukses
        return redirect()->route('pendaftaranPasien.index')->with('success', 'Data berhasil disimpan.');
    }


    public function edit($id)
    {
        $pendaftaranPasien = pendaftaranPasien::find($id);
        return view('Petugas.editRegisPasien', compact('pendaftaranPasien'));
    }

    public function update(Request $request, $id)
    {
        $pendaftaranPasien = pendaftaranPasien::find($id);
        $pendaftaranPasien->update($request->all());
        return redirect()->route('Petugas.indexRegisPasien');
    }

    public function destroy($id)
    {
        $pendaftaranPasien = pendaftaranPasien::find($id);
        $pendaftaranPasien->delete();
        return redirect()->route('pendaftaranPasien.index')->with('success', 'Data berhasil dihapus.');
    }
}
