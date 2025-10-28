<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(3),
            'category' => $this->faker->randomElement([
                'Web Development',
                'Mobile App Design',
                'AI Feature',
                'Music Therapy',
                'UI/UX Case Study'
            ]),
            'image' => $this->faker->imageUrl(640, 480, 'blog', true),
            'link' => $this->faker->url(),
            'badge' => $this->faker->randomElement([
                'Figma',
                'HTML/CSS',
                'Laravel',
                'TailwindCSS',
                'JavaScript'
            ]),
            'month' => $this->faker->randomElement([
                'Jan 2024', 'Feb 2024', 'Mar 2024', 'Apr 2024', 
                'May 2024', 'Jun 2024', 'Jul 2024', 'Aug 2024',
                'Sep 2024', 'Oct 2024', 'Nov 2024', 'Dec 2024'
            ]),
        ];
    }
}
