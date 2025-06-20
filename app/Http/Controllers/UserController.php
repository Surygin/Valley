<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store()
    {
        return User::create(
            [
                'name' => fake()->name,
                'email' => fake()->email,
                'password' => Hash::make('1234'),
            ]
        );
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(User $user)
    {
        $user->update([
            'email' => fake()->email
        ]);

        return $user;
    }

    public function delete(User $user)
    {
        $user->delete();

        return response([
            'message' => 'Deleted'
        ], Response::HTTP_OK);
    }
}
