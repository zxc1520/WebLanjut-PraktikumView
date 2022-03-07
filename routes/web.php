<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = array(
        "title" => "home",
        "name" => "Afif Qomarul Ghulam",
        "address" => "Griya Nagari Singosari",
    );
    return view('home', $data);
});

Route::get('/about', function () {
    $data = array (
        "title" => "about",
        "nama"  => "Afif Qomarul Ghulam",
        "ttl"   => "Malang 7 Mei 2002",
        "alamat" => "Jl. LA Sucipto VIII/7 Blimbing, Malang",
        "domisili" => "Perum Griya Nagari Singosari Blok N/8",
        "telp" => "+6285100361329"
    );
    return view('about', $data);
});

Route::get('/test', TestController::class);

Route::get('/hello', [HelloController::class, 'hello']);
