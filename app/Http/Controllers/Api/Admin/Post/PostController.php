<?php

namespace App\Http\Controllers\Api\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Admin\Post\IndexResource;
use App\Http\Resources\Admin\Post\ShowResource;
use App\Models\Post;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\Http\Response;

class PostController extends Controller
{

    /**
     * @return array
     */
    public function index(): array
    {
        $posts = Post::all();
        return IndexResource::collection($posts)->resolve();
    }

    /**
     * @param StoreRequest $request
     * @return Post
     */
    public function store(StoreRequest $request): Post
    {
        $data = $request->validationData();
        $post = Post::create($data);

        return $post;
    }

    /**
     * @param Post $post
     * @return array
     */
    public function show(Post $post): array
    {
        return ShowResource::make($post)->resolve();
    }

    /**
     * @param UpdateRequest $request
     * @param Post $post
     * @return Post
     */
    public function update(UpdateRequest $request, Post $post): Post
    {
        $data = $request->validationData();
        $post->update($data);

        return $post;
    }

    /**
     * @param Post $post
     * @return Response
     */
    public function destroy(Post $post): Response
    {
        $post->delete();

        return response([
            'message' => 'Deleted'
        ], Response::HTTP_OK);
    }
}

