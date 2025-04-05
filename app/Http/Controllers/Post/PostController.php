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

        public function show($id){
            $post = Post::where('id', $id)->first();
            return view('post::single-post', ['title' => 'Пост',
            'post' => $post,
            ]);
        }
        public function CategoryPost($id)
        {
            $posts = Post::where('is_active', true)->where('category_post_id', $id)->get();
            return view('category::category-post', [
                'title' => 'Все записи этой категории',
                'posts' => $posts,
            ]);
        }
}
