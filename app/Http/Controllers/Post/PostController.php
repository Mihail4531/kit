<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where("is_active", true)->get();
        return view('post::index', ['title' => 'Посты', "posts" => $posts]);
    }
}
