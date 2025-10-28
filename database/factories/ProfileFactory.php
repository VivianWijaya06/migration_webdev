<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['English', 'Mandarin', 'Korean', 'Japanese', 'Indonesian', 'Spanish', 'French', 'German','Italian']),
            'level' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Fluent']),
            'percentage' => $this->faker->numberBetween(60, 100),
        ];
    }
}
