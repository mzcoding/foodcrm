<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuisine>
 */
class CuisineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $restaurant = Restaurant::factory()->create();
        return [
            'restaurant_id' => $restaurant->id,
            'title' => fake()->title(),
            'image' => fake()->imageUrl(350, 350),
            'description' => fake()->text(100),
        ];
    }
}
