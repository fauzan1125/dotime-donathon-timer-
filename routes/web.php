<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OverlayController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');

// Route untuk OBS Browser Source
Route::get('/overlay/{token}', [OverlayController::class, 'show'])->name('overlay.show');

// Route untuk Halaman Link-in-Bio Publik (Taruh di Paling Bawah Route)
Route::get('/{username}', [ProfileController::class, 'show'])->name('profile.show');
});
