<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'title' => 'The Future of Web Development: Trends to Watch',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, ad eum. Nobis totam ad sapiente debitis cum. Beatae atque, corrupti natus minima corporis nemo, fugiat iusto, ab minus maxime rem.',
            'subtitle' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        ]);



        Post::create([
            'title' => 'The Lorem ipsum dolor: Trends to Watch',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, ad eum. Nobis totam ad sapiente debitis cum. Beatae atque, corrupti natus minima corporis nemo, fugiat iusto, ab minus maxime rem.',
            'subtitle' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        ]);

        Post::create([
            'title' => 'The Lorem ipsum dolor: Trends to Watch',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, ad eum. Nobis totam ad sapiente debitis cum. Beatae atque, corrupti natus minima corporis nemo, fugiat iusto, ab minus maxime rem.',
            'subtitle' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        ]);

        Post::create([
            'title' => 'Lorem ipsum dolor Development: Trends to Watch',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, ad eum. Nobis totam ad sapiente debitis cum. Beatae atque, corrupti natus minima corporis nemo, fugiat iusto, ab minus maxime rem.',
            'subtitle' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
        ]);
    }
}
