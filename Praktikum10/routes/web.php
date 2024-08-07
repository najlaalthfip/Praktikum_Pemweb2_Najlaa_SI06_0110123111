<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PasienController;
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
Route::get('/admin/pasien', [PasienController::class, 'index']);

?>