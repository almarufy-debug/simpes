<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/santri', [SantriController::class, 'index']);