<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(5),
            'description' => fake()->text(200),
            'img_path' => fake()->imageUrl,
            'content' => fake()->text,
            'published_at' => now(),
            'status' => 1,
            'profile_id' => Profile::all()->random()->id,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
