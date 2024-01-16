<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() {
        $posts = DB::table("posts")
                    ->orderBy('id', 'desc')
                    ->get();

        return view('pages.posts.index', ['posts' => $posts]);
    }
}
