<?php

use Illuminate\Database\Seeder;

class CreatePostSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = factory(App\Post::class, 20)->make();

        foreach ($posts as $post) {
            $post->save();
        }
    }
}
