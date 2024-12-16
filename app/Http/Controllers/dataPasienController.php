<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataPasien;

class dataPasienController extends Controller
{
    public function index()
    {
        $dataPasien = dataPasien::all();
        return view('DataPasien.index', compact('dataPasien'));
    }

    public function create()
    {
        return view('DataPasien.create');
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

        // Simpan data ke database (contoh: model `DataPasien`)
        DataPasien::create($validated);

        // Redirect ke halaman lain dengan
        return redirect()->route('dataPasien.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = dataPasien::find($id);
        return view('DataPasien.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nik' => 'required|string|max:16',
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

        $data = dataPasien::find($id);
        $data->update($validated);

        return redirect()->route('dataPasien.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $data = dataPasien::find($id);
        $data->delete();

        return redirect()->route('dataPasien.index')->with('success', 'Data berhasil dihapus.');
    }
}
