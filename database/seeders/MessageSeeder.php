<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chats = Chat::all();

        foreach ($chats as $chat)
        {
            $chat->messages()->create([
                'profile_id' => Profile::all()->random()->id,
                'content' => fake()->text,
            ]);
        }
    }
}
