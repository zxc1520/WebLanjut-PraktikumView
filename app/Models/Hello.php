<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

class Hello extends Model
{
    private static $name = "Afif Qomarul Ghulam";

    public static function getName()
    {
        # code...
        return self::$name;
    }

    public static function getAddress($id)
    {
        # code...
        if ($id == 1) {
            # code...
            $address = "Blimbing";
        } else {
            $address = "Singosari";
        }

        return $address;
    }

    public static function getTelp()
    {
        # code...
        $data = collect([0,8,5,1,2,3,4,5,6,7,8]);

        return $data->first();
    }
}
