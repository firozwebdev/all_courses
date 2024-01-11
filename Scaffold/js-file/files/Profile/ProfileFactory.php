<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
/**
* @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
*/
class ProfileFactory extends Factory
{
  protected static ?string $password = null;

  /**
  * Define the model's default state.
  *
  * @return array<string, mixed>
  */
  public function definition(): array
  {
    return [
      'photo' => fake()->imageurl(),
      'address' => fake()->address(),
    ];
  }

}
