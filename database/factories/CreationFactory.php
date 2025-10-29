<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CreationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'icon' => $this->faker->randomElement(['code', 'smartphone', 'palette', 'cpu', 'rocket']),
            'title' => $this->faker->randomElement([
                'Web Development',
                'Mobile App Development', 
                'UI/UX Design',
                'Music Therapy Feature',
                'AI Recommendation System',
                'Data Visualization Dashboard',
                'E-Commerce Platform',
                'Personal Portfolio Website',
                'Health Tracking App',
                'Machine Learning Integration'
            ]),
            'description' => $this->faker->sentence(12),
            'badge' => $this->faker->randomElement(['star', 'heart', 'rocket']),
        ];
    }
}