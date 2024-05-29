<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\Unit_KerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [PegawaiController::class,'index']);

Route::get('/admin/index', function () {
    return view('admin.index');
});

Route::get('/admin/pegawai', function () {
    return view('admin.pegawai');
});

// pasien
Route::get('/pasien', [PasienController::class, 'index']);
Route::get('pasien/index', function () {
    return view('pasien.index');
});

Route::get('/pasien/pasien', function () {
    return view('pasien.pasien');
});

Route::get('/pasien/periksa', [PeriksaController::class, 'index']);

Route::get('/pasien/dokter', [DokterController::class, 'index']);

Route::get('/pasien/unit_kerja', [Unit_KerjaController::class, 'index']);

?>