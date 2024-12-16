<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pendaftaranPasienController;
use App\Http\Controllers\dataPasienController;
use App\Http\Controllers\jadwalDokterController;
use App\Http\Controllers\dataDokterController;
use App\Http\Controllers\dataObatController;
use App\Http\Controllers\keluhanPasienController;
use App\Http\Controllers\resepObatController;
use App\Http\Controllers\riwayatPemeriksaanController;

Route::get('/Dashboard', function () {
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
Route::resource('/dataPasien', dataPasienController::class);
Route::resource('/jadwalDokter', jadwalDokterController::class);
Route::resource('/dataDokter', dataDokterController::class);
Route::resource('/dataObat', dataObatController::class);
Route::resource('/keluhanPasien', keluhanPasienController::class);
Route::resource('/resepObat', resepObatController::class);
Route::resource('/riwayatPemeriksaan', riwayatPemeriksaanController::class);