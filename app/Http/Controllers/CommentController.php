<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::all();
    }

    public function show(Comment $comment)
    {
        return $comment;
    }

    public function store()
    {
        $randomUser = Profile::all()->random();
        $randomPost = Post::all()->random();
        return Comment::create([
            'author' => $randomUser->name .' '. $randomUser->surname,
            'content' => fake()->text(100),
            'like' => rand(0, 100),
            'post' => $randomPost->id,
            'parent' => '',
        ]);
    }

    public function update(Comment $comment)
    {
        $comment->update([
            'content' => fake()->text(100),
        ]);

        return $comment;
    }

    public function delete(Comment $comment)
    {
        $comment->delete();

        return response([
            'message' => 'Deleted!'
        ], Response::HTTP_OK);
    }
}
