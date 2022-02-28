<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello', [HelloController::class, 'hello']);
