<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index()
    {
        # code...
        // $user = DB::select("SELECT * FROM db_laravel");
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function item($id) {
        return view('post', [
            "title" => "Post",
            "posts" => DB::table('posts')->find($id)
        ]);
    }
}
