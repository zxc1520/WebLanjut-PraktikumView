<?php

namespace App\Http\Controllers;

use App\Models\Hello;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index() {
        return view('home', [
            "title" => "Home",
            "name" => Hello::getName(),
            "address" => Hello::getAddress(1),
        ]);
    }

    public function hello()
    {
        # code...
        return "Hello World";
    }

    public function add($a, $b) {
        return $val = $a + $b;
    }


}
