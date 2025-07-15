<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;
use App\Http\Requests\Comment\UpdateRequest;
use App\Http\Resources\Comment\IndexResource;
use App\Http\Resources\Comment\ShowResource;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    public function index()
    {
        return IndexResource::collection(Comment::all())->resolve();
    }

    public function show(Comment $comment)
    {
        return ShowResource::make($comment)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validationData();
        $comment = Comment::create($data);

        return $comment;
    }

    public function update(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validationData();
        $comment->update($data);

        return $comment;
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return response([
            "message" => "This is deleted!"
        ], Response::HTTP_OK);
    }
}
