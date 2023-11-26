<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Projects>
 */
class ProjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'image' => fake()->randomElement(['1.jpg','2.jpg','3.jpg','4.jpg']),
            'category' => fake()->randomElement(['Backend Developer','Frontend Developer','Full Stack Developer',]),
            'description' => fake()->text,
            'short_description' => fake()->text(150),

        ];
    }
}
