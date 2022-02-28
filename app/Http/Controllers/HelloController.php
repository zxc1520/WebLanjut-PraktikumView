<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function hello()
    {
        # code...
        return "Hello World";
    }

    public function add($val, $a, $b) {
        return $val = $a + $b;
    }
}
