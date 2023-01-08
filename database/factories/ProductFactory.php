<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fnRandom = fn(): int => \mt_rand(0, 1);
        return [
            'title' => fake()->title(),
            'image' => fake()->imageUrl(250, 250),
            'description' => fake()->text(100),
            'price' => fake()->randomFloat(),
            'is_vegetarian' => (bool) $fnRandom(),
            'is_halal' => (bool) $fnRandom(),
            'is_adult' => (bool) $fnRandom(),
            'is_active' => true,
        ];
    }
}
