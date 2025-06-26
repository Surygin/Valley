<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;
use App\Http\Resources\Tag\IndexResource;
use App\Http\Resources\Tag\ShowResource;
use App\Models\Tag;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();

        return IndexResource::collection($tags)->resolve();
    }

    public function show(Tag $tag)
    {
        return ShowResource::make($tag)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validationData();
        $tag = Tag::create($data);

        return $tag;
    }

    public function update(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validationData();
        $tag->update($data);

        return $tag;
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return response([
            "message" => "Tag id Deleted!"
        ], Response::HTTP_OK);
    }
}
