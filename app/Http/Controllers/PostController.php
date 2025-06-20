<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PostController extends Controller
{

    /**
     * @return Collection
     */
    public function index()
    {
        $posts = Post::all();
        return $posts;

    }

    public function store()
    {
        $post = Post::create([
            'title' => fake()->text(20),
            'description' => fake()->text(200),
            'author' => fake()->name,
            'tag' => fake()->text(5),
            'img_path' => fake()->imageUrl,
            'content' => fake()->text,
            'published_at' => fake()->dateTime,
            'views' => random_int(1, 1000),
            'status' => rand(0, 1),
            'category' => fake()->text(7),
            'is _active' => rand(0, 1),
        ]);

        return $post;
    }

    public function show(Post $post)
    {
        return $post;
    }

    /**
     * @param Post $post
     * @return mixed
     */
    public function update(Post $post)
    {
        $post->update([
            'content' => fake()->text,
        ]);

        return $post;
    }

    /**
     * @param Post $post
     * @return ResponseFactory|Application|Response|object
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return response([
            'message' => 'Deleted'
        ], Response::HTTP_OK);
    }
}
