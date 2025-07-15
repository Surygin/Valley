<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::factory(20)->create();

        foreach ($posts as $post)
        {
            $post->comments()->create([
                'profile_id' => Profile::all()->random()->id,
                'content' => fake()->text,
                'parent' => '',
            ]);
        }
    }
}
