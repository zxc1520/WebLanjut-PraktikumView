<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\TestController;
use App\Models\Hello;
use Illuminate\Support\Facades\Route;

Route::get('/', [HelloController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/test', TestController::class);
