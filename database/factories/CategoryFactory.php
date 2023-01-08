<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Cuisine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cuisine = Cuisine::factory()->create();
        return [
            'cuisine_id' => $cuisine->id,
            'title' => fake()->title(),
            'image' => fake()->imageUrl(350, 350),
            'description' => fake()->text(100),
        ];
    }
}
