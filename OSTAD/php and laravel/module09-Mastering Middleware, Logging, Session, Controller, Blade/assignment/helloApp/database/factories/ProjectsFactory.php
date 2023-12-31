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
            'image' => fake()->randomElement(
                [
                    'portfolio-1.jpg',
                    'portfolio-2.jpg',
                    'portfolio-3.jpg',
                    'portfolio-4.jpg',
                    'portfolio-5.jpg',
                    'portfolio-6.jpg',
                    'portfolio-7.jpg',
                    'portfolio-8.jpg',

                ]
            ),
            'category' => fake()->randomElement(['Backend Developer','Frontend Developer','Full Stack Developer',]),
            'description' => fake()->text,
            'short_description' => fake()->text(150),

        ];
    }
}
