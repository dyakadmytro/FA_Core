<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HeroData>
 */
class HeroDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
//            'nick' => fake()->name(),
            'description' => fake()->paragraph(),
            'profile_img' => fake()->word(),
            'health' => fake()->randomDigit(),
            'strength' => fake()->randomDigit(),
            'agility' => fake()->randomDigit(),
            'luck' => fake()->randomDigit()
        ];
    }
}
