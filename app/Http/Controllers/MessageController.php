<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Message;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MessageController extends Controller
{
    public function index()
    {
        return Message::all();
    }

    public function store()
    {
        $randomProfile = Profile::all()->random();
        $randomChat = Chat::all()->random();

        return Message::create([
            'author' => $randomProfile->name .' '. $randomProfile->surname,
            'chat' => $randomChat->id,
            'content' => fake()->text,
        ]);
    }

    public function show(Message $message)
    {
        return $message;
    }

    public function update(Message $message)
    {
        $message->update([
            'content' => fake()->text,
        ]);

        return $message;
    }

    public function delete(Message $message)
    {
        $message->delete();

        return response([
            'message' => 'Deleted!'
        ], Response::HTTP_OK);
    }
}
