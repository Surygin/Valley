<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Chat\StoreRequest;
use App\Http\Requests\Chat\UpdateRequest;
use App\Http\Resources\Chat\IndexResource;
use App\Http\Resources\Chat\ShowResource;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChatController extends Controller
{
    public function index()
    {
        return IndexResource::collection(Chat::all())->resolve();
    }

    public function show(Chat $chat)
    {
        return ShowResource::make($chat)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validationData();
        $chat = Chat::create($data);

        return $chat;
    }

    public function update(UpdateRequest $request, Chat $chat)
    {
        $data = $request->validationData();
        $chat->update($data);

        return $chat;
    }

    public function destroy(Chat $chat)
    {
        $chat->delete();

        return response([
            "message" => "This is deleted!"
        ], Response::HTTP_OK);
    }
}
