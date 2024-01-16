<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    protected $model = \App\Models\Post::class;
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'content' => fake()->paragraph(rand(2, 6)),
            'created_at' => now(),
        ];
    }
}
