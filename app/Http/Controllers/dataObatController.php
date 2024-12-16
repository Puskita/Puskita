<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataObat;

class dataObatController extends Controller
{
    public function index()
    {
        $dataObat = dataObat::all();
        return view('Farmasi.index', compact('dataObat'));
    }

    public function create()
    {
        return view('Farmasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'namaObat' => 'required|string|max:255',
            'jenisObat' => 'required|string|max:255',
            'dosis' => 'required|string|max:255',
            'satuan' => 'required|string|max:255',
            'jumlahStok' => 'required|integer',
            'harga' => 'required|integer',
            'tanggalKadaluarsa' => 'required|date',
            'produsen' => 'required|string|max:255'
        ]);

        dataObat::create($validated);
        return redirect()->route('dataObat.index')->with('success', 'Obat berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $obat = dataObat::findOrFail($id);
        return view('Farmasi.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'namaObat' => 'required|string|max:255',
            'jenisObat' => 'required|string|max:255',
            'dosis' => 'required|string|max:255',
            'satuan' => 'required|string|max:255',
            'jumlahStok' => 'required|integer',
            'harga' => 'required|integer',
            'tanggalKadaluarsa' => 'required|date',
            'produsen' => 'required|string|max:255'
        ]);

        $obat = dataObat::findOrFail($id);
        $obat->update($validated);
        return redirect()->route('dataObat.index')->with('success', 'Data obat berhasil diupdate.');
    }

    public function destroy($id)
    {
        $obat = dataObat::findOrFail($id);
        $obat->delete();
        return redirect()->route('dataObat.index')->with('success', 'Obat berhasil dihapus.');
    }
}
