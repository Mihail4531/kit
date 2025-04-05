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
                'name' => 'Страччателла',
                'small_text' => 'бульон с яйцами',
                'content' => ' это традиционный итальянский сыр с насыщенным сливочным вкусом. Его готовят из молока либо кусочков моцареллы и сливок. Название в переводе с итальянского означает «разорванный» (stracciate) — действительно, сыр выглядит как объёмные, пропитанные сливками нити. 1
Считается, что появился сыр в начале XX века, рецепт придумали потомственные сыровары Бьянкини — так они нашли способ использовать маленькие кусочки, которые оставались после приготовления основных сыров. ',
                'image' => null,
                'is_active' => true,
                'is_featured'=> false,


            ],
            [
                'name' => 'Лазанья',
                'small_text' => 'слоёная запеканка из теста',
                'content' => 'Традиционное блюдо итальянской кухни, приготовленное из слоёв теста вперемешку со слоями начинки, залитых соусами бешамель и болоньезе (также возможны другие соусы и начинки',
                'image' => null,
                'is_active' => true,
                'is_featured'=> false,

            ],
            [
                'name' => 'Пицца',
                'small_text' => 'открытый пирог, запечённый с томатным соусом, сыром и разнообразными ингредиентами',
                'content' => 'традиционное блюдо итальянской кухни, представляющее собой круглую дрожжевую лепёшку с уложенной сверху начинкой из томатного соуса, сыра и зачастую других ингредиентов, таких как мясо, овощи, грибы и прочие продукты',
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
