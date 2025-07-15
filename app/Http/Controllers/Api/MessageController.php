<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Message\StoreRequest;
use App\Http\Requests\Message\UpdateRequest;
use App\Http\Resources\Message\IndexResource;
use App\Http\Resources\Message\ShowResource;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MessageController extends Controller
{
    public function index()
    {
        return IndexResource::collection(Message::all())->resolve();
    }

    public function show(Message $message)
    {
        return ShowResource::make($message)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validationData();
        $message = Message::create($data);

        return $message;
    }

    public function update(UpdateRequest $request, Message $message)
    {
        $data = $request->validationData();
        $message->update($data);

        return $message;
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return response([
            "message" => "This is deleted!"
        ], Response::HTTP_OK);
    }
}
