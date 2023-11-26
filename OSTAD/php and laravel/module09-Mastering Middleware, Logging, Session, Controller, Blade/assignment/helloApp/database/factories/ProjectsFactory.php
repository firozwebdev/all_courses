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
                    'portfolio-1',
                    'portfolio-2',
                    'portfolio-3',
                    'portfolio-4',
                    'portfolio-5',
                    'portfolio-6',
                    'portfolio-7',
                    'portfolio-8',

                ]
            ),
            'category' => fake()->randomElement(['Backend Developer','Frontend Developer','Full Stack Developer',]),
            'description' => fake()->text,
            'short_description' => fake()->text(150),

        ];
    }
}
