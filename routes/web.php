<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\viewController;

Route::get('/', [viewController::class, 'index']);
Route::get('/tampil-buku', [viewController::class, 'tampilBuku']);
Route::get('/tampilan-update-buku/{id}', [viewController::class, 'updateBuku']);


//controller 
Route::post('/tambah-buku', [bukuController::class, 'inputBuku']);
Route::put('/update-buku', [bukuController::class, 'updateBuku']);
Route::delete('/hapus-buku', [bukuController::class, 'deleteBuku']);
