<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::orderBy('id', 'desc')
                    ->get();

        return view('pages.posts.index', ['posts' => $posts]);
    }

    public function create() {
        return view('pages.posts.create');
    }
}
