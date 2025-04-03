<?php

use App\Http\Controllers\Category\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;
Route::namespace('Post')->name('post.')->group(function(){

    Route::get('/posts', [PostController::class, 'index'])->name('index');
});
Route::namespace('Category')->name('category.')->group(function(){

    Route::get('/category', [CategoryController::class, 'index'])->name('index');
});
