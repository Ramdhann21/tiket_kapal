<?php

use App\Http\Controllers\tiketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/kapal', function () {
    return view('kapal');
});


Route::get('/tiket',[tiketController::class, 'tampil'])->name('tiket.tampil');