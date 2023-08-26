<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Effect>
 */
class EffectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => implode(' ',fake()->words(2)),
            'description' => implode(' ',fake()->sentences(3)),
            'profile_img' => fake()->word.fake()->randomDigit(),
            'type' => fake()->randomElement(['permanent', 'action']),
            'direction' => fake()->randomElement(['self', 'opponent']),
            'fire_on_event' => fake()->randomElement(['start', 'end', 'b4PlayerAct', 'afterPlayerAct']),
            'value' => fake()->randomDigit(),
            'scale' => fake()->randomElement(['point', 'percent'])
        ];
    }
}
