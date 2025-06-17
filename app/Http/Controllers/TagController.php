<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TagController extends Controller
{
    public function index()
    {
        return Tag::all();
    }

    public function store()
    {
        return Tag::create([
            'title' => fake()->title
        ]);
    }

    public function show(Tag $tag)
    {
        return $tag;
    }

    public function update(Tag $tag)
    {
        $tag->update([
            'title' => fake()->title
        ]);

        return $tag;
    }

    public function delete(Tag $tag)
    {
        $tag->delete();

        return response([
            'message' => 'Deleted'
        ], Response::HTTP_OK);
    }

}
