<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        // \App\Models\Post::factory()->create([
        //     'title' => $faker->title,
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Post::factory(100)->create();

        $locations = ['Dhaka', 'Comilla', 'Chittagong', "Cox's Bazaar"];
        foreach ($locations as $location) {
            \App\Models\Location::create([
                'name' => $location,
            ]);
        }
    }
}
