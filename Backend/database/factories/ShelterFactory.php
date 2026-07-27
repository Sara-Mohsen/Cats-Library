<?php

namespace Database\Factories;

use App\Models\Shelter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Shelter>
 */
class ShelterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'file_number' => fake()->unique()->numberBetween(1000, 9999),
            'description' => fake()->text(),
            'breed' => fake()->word(),
        ];
    }
}
