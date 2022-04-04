<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('home', [
            'title' => Home::first()->title,
            'name' => Home::first()->name,
            'address' => Home::first()->address,
            'telp' => Home::first()->telp
        ]);
    }
}
