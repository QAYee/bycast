<?php

namespace Database\Factories;

use App\Models\Diecast;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Diecast>
 */
class DiecastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'brand' => $this->faker->company(),
            'scale' => $this->faker->randomElement(['1:18', '1:24', '1:32', '1:43', '1:64']),
            'price' => $this->faker->randomFloat(),
            'release_date' => $this->faker->date(),
            'description' => $this->faker->paragraph(),
            'image_url' => $this->faker->imageUrl(640, 480, 'cars', true),
        ];
    }
}
