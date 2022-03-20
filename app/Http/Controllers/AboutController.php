<?php

namespace App\Http\Controllers;

use App\Models\Hello;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('about', [
            "title" => "about",
            "nama"  => "Afif Qomarul Ghulam",
            "ttl"   => "Malang 7 Mei 2002",
            "alamat" => "Jl. LA Sucipto VIII/7 Blimbing, Malang",
            "domisili" => "Perum Griya Nagari Singosari Blok N/8",
            "telp" => Hello::getTelp()
        ]);
    }
}
