<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
Route::get('/product/index', [ProductController::class, 'index']);
Route::get('/product/show', [ProductController::class, 'show']);

use App\Http\Controllers\ProfileController;
Route::get('/profile', [ProfileController::class, 'index']);

use App\Http\Controllers\PelangganController;
Route::get('/pelanggan/profile', [PelangganController::class, 'profile']);
Route::get('/pelanggan/store', [PelangganController::class, 'store']);
Route::get('/pelanggan/edit', [PelangganController::class, 'edit']);
Route::get('/pelanggan/update', [PelangganController::class, 'update']);
Route::get('/pelanggan/{id}', [PelangganController::class, 'show']);



Route::get('/', function () {
    return view('welcome');
});

