<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'name' => 'Вкусная еда',
                'small_text' => 'Вкусная еда',
                'content' => 'Вкусная еда ',
                'image' => null,
                'is_active' => true,
                'is_featured'=> false,

            ],
            [
                'name' => 'Вкусная еда',
                'small_text' => 'Вкусная еда',
                'content' => 'Вкусная еда',
                'image' => null,
                'is_active' => true,
                'is_featured'=> false,

            ],
            [
                'name' => 'Вкусная еда',
                'small_text' => 'Вкусная еда',
                'content' => 'Вкусная еда',
                'image' => null,
                'is_active' => true,
                'is_featured'=> false,

            ],
        ];
        foreach($posts as $post){
            Post::create([
                'category_post_id' => 1,
                'name' => $post['name'],
                'small_text' => $post['small_text'],
                'content' => $post['content'],
                'image' => $post['image'],
                'is_active' => $post['is_active'],
                'is_featured'=> $post['is_featured'],

            ]);
    }

    }
}
