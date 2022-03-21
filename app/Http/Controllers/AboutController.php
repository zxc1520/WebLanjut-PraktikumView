<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Hello;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('about', [
            "title" => "About",
            "body" => About::getAll()
        ]);
    }
}
