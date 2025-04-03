<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'is_banner' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_post_id');
    }
}
