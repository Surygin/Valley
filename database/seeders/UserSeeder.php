<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();

        foreach ($users as $user)
        {
            $user->profile()->create([
                'name' => fake()->firstName,
                'surname' => fake()->lastName,
                'birthday_at' => fake()->date('Y-m-d'),
                'description' => fake()->text,
                'phone' => fake()->phoneNumber,
                'address' => fake()->address,
            ]);
        }
    }
}
