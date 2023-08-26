<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loot>
 */
class LootFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true),
            'health' => fake()->numberBetween(1, 100),
            'wear' => fake()->numberBetween(1, 100),
            'description' => fake()->sentences(3, true),
            'type' => fake()->randomElement(['ARMOUR', 'WEAPON', 'GLOVES', 'BOOTS', 'RING', 'CLOAK', 'HELMET', 'PENDANT', 'AMULET', 'POTION', 'SCROLL']),
            'can_be_repaired' => fake()->boolean(),
            'profile_img' => fake()->word . fake()->randomDigit(),
        ];
    }
}
