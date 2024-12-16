<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataDokter;

class dataDokterController extends Controller
{
    public function index()
    {
        $dataDokter = DataDokter::all();
        return view('DataDokter.index', compact('dataDokter'));
    }

    public function create()
    {
        return view('DataDokter.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'namaDokter' => 'required|string|max:255',
            'spesialis' => 'required|string|max:255',

        ]);

        DataDokter::create($validated);
        return redirect()->route('dataDokter.index')->with('success', 'Dokter berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $dokter = DataDokter::findOrFail($id);
        return view('DataDokter.edit', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'namaDokter' => 'required|string|max:255',
            'spesialis' => 'required|string|max:255',
        ]);

        $dokter = DataDokter::findOrFail($id);
        $dokter->update($validated);
        return redirect()->route('dataDokter.index')->with('success', 'Data dokter berhasil diupdate.');
    }

    public function destroy($id)
    {
        $dokter = DataDokter::findOrFail($id);
        $dokter->delete();
        return redirect()->route('dataDokter.index')->with('success', 'Dokter berhasil dihapus.');
    }
}
