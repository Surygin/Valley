<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = Profile::all();

        foreach ($profiles as $user)
        {
            Chat::create([
                'title' => 'Владелец чата - ' . $user->name . ' ' . $user->surname,
                'profile_id' => $user->id,
            ]);
        }
    }
}
