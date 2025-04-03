<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where("is_active", true)->get();
        return view('category::index', ['title' => 'Категории', "categories" => $categories ]);
    }
}
