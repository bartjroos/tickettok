<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => ucfirst(fake()->words(rand(2,5), true)),
            'date' => fake()->dateTimeBetween('-5 years', '+2 years'),
            'time' => fake()->time(),
            'location' => ucfirst(fake()->word()) . ", " . fake()->countryCode(), // password
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 10, 200),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
