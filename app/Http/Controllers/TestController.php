<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function __invoke()
    {
        # code...
        return view('test');
    }
}
