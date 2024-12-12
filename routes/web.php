<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pendaftaranPasienController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/ResepObat', function () {
    return view('Dokter.resepobat');
});

Route::get('/JadwalDokter', function () {
    return view('Petugas.jadwaldokter');
});


// Resource route for handling other CRUD operations
Route::resource('/pendaftaranPasien', pendaftaranPasienController::class);