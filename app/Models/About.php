<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    private static $post = [
        [
            "nama"  => "Afif Qomarul Ghulam",
            "ttl"   => "Malang 7 Mei 2002",
            "alamat" => "Jl. LA Sucipto VIII/7 Blimbing, Malang",
            "domisili" => "Perum Griya Nagari Singosari Blok N/8",
            "telp" => "085100361329"
        ]
    ];

    public static function getAll()
    {
        # code...
        return self::$post;
    }
}
