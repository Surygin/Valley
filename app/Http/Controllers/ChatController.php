<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChatController extends Controller
{
    public function index()
    {
        return Chat::all();
    }

    public function store()
    {
        $randomProfile = Profile::all()->random();

        return Chat::create([
            'title' => fake()->title,
            'author' => $randomProfile->name .' '. $randomProfile->surname,
        ]);
    }

    public function show(Chat $chat)
    {
        return $chat;
    }

    public function update(Chat $chat)
    {
        $chat->update([
            'title' => fake()->title,
        ]);

        return $chat;
    }

    public function delete(Chat $chat)
    {
        $chat->delete();

        return response([
            'message' => 'Deleted'
        ], Response::HTTP_OK);
    }
}
