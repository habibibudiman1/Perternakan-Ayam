<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyamController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ayam', [AyamController::class, 'index']);
