<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::factory()->create();
        return [
            'user_id' => $user->id,
            'title' => fake()->jobTitle(),
            'image' => fake()->imageUrl(200, 200),
            'description' => fake()->text(100),
            'address' => fake()->address(),
            'phone_number' => fake()->phoneNumber(),
            'web_site' => fake()->url(),
            'is_active' => true,
        ];
    }
}
