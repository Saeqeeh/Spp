<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardControllers;
use App\Http\Controllers\historiControllers;
use App\Http\Controllers\PembayaranControllers;
use App\Http\Controllers\DataSiswaControllers;
use App\Http\Controllers\DataPetugasControllers;
use App\Http\Controllers\DataSppControllers;
use App\Http\Controllers\DataKelasControllers;
use App\Http\Controllers\LaporanControllers;

// Route::get('/dashboard', function () {return view('dasboard');});

Route::post('/login', [dashboardControllers::class, 'login']);
Route::get('/dashboard', [dashboardControllers::class, 'index']);
// Route::post('/store', [dashboardControllers::class, 'store']);
// Route::get('/edit/{nis:nis}', [dashboardControllers::class, 'edit']);
// Route::put('/update/{nis}', [dashboardControllers::class, 'update']);
// Route::delete('delete/{nis}', [dashboardControllers::class, 'destroy']);

Route::get('/history', [HistoriControllers::class, 'history']);



Route::get('/pembayaran', [PembayaranControllers::class, 'index']);



Route::get('/datapetugas', [DataPetugasControllers::class, 'index']);




Route::get('/dataspp', [DataSppControllers::class, 'index']);


Route::get('/datakelas', [DataKelasControllers::class, 'index']);



Route::get('/laporan', [LaporanControllers::class, 'index']);