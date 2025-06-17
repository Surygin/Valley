<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index()
    {
        return Profile::all();
    }

    public function store()
    {
        return Profile::create([
            'name' => fake()->firstName,
            'surname' => fake()->lastName,
            'birthday_at' => fake()->date(),
            'description' => fake()->text(200),
            'phone' => fake()->phoneNumber,
            'address' => fake()->address,
            'login' => fake()->email(),
        ]);
    }

    public function show(Profile $profile)
    {
        return $profile;
    }

    public function update(Profile $profile)
    {
        $profile->update([
            'address' => fake()->address,
            'login' => fake()->email(),
        ]);

        return $profile;
    }

    public function delete(Profile $profile)
    {
        $profile->delete();

        return response([
            'message' => 'Deleted'
        ], Response::HTTP_OK);
    }
}
