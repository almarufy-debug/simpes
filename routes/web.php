<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/santri', [SantriController::class, 'index'])
    ->name('santri.index');

Route::get('/santri/create', [SantriController::class, 'create'])
    ->name('santri.create');

Route::post('/santri', [SantriController::class, 'store'])
    ->name('santri.store');