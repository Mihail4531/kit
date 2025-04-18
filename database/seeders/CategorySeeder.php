<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Выпечка',
                'is_active' => true,
                'is_featured' => false,

            ],
            [
                'name' => 'Итальянская кухня',
                'is_active' => true,
                'is_featured' => true,

            ],
            [
                'name' => 'Французкая кухня',
                'is_active' => false,
                'is_featured' => false,

            ],
        ];
        foreach($categories as $category){
            Category::create($category);
        }
    }
}
