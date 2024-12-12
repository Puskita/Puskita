<?php

use Illuminate\Support\Facades\Route;

Route::get('/Dashboard', function () {
    return view('dashboard');
});

Route::get('/ResepObat', function () {
    return view('resepobat');
});

Route::get('/JadwalDokter', function () {
    return view('jadwaldokter');
});