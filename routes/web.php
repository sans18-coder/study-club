<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\viewController;

Route::get('/', [viewController::class, 'index']);
Route::get('/tampil-buku', [viewController::class, 'tampilBuku']);

//controller 
Route::post('/tambah-buku', [bukuController::class, 'inputBuku']);
