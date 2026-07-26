<?php

namespace Database\Factories;

use App\Models\Cats;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Shelter;

/**
 * @extends Factory<Cats>
 */
class CatsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $shelter = Shelter::inRandomOrder()->first();

        $emotions = match ($shelter->breed) {
            'Persian' => ['Calm', 'Gentle', 'Lazy'],
            'Siamese' => ['Curious', 'Vocal', 'Energetic'],
            'Maine Coon' => ['Friendly', 'Playful', 'Loyal'],
            'British Shorthair' => ['Quiet', 'Independent', 'Calm'],
            'Ragdoll' => ['Affectionate', 'Relaxed', 'Gentle'],
            'Scottish Fold' => ['Sweet', 'Playful', 'Curious'],
            'Bengal' => ['Energetic', 'Brave', 'Mischievous'],
            default => ['Friendly'],
        };
        return [
            'name' => fake()->randomElement([
                'Luna',
                'Milo',
                'Leo',
                'Bella',
                'Nala',
                'Simba',
                'Loki',
                'Coco',
                'Oliver',
                'Kitty',
                'Mochi',
                'Oreo',
                'Shadow',
                'Smokey',
                'Tiger',
                'Pumpkin',
                'Misty',
                'Willow',
                'Nova',
                'Pepper',
                'Sushi',
            ]),
            'age' => fake()->numberBetween(1, 15),
            'color' => fake()->randomElement([
                'Black',
                'White',
                'Gray',
                'Orange',
                'Brown',
                'Cream',
                'Golden',
                'Blue Gray',
                'Tabby',
                'Calico',
                'Tortoiseshell',
                'Black & White',
                'Gray & White',
                'Orange & White',
                'Brown Tabby',
            ]),

            'emotion' => fake()->randomElement($emotions),
            'shelter_id' => $shelter->id,
        ];
    }
}
