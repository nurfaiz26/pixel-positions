<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory()->create(),
            'salary' => fake()->randomElement(['$10,0000 USD', '$50,000 USD', '$100,000 USD']),
            'location' => fake()->randomElement(['Remote', 'Hybrid', 'On Site']),
            'schedule' => fake()->randomElement(['Full Time', 'Contract', 'Part Time']),
            'url' => fake()->url(),
            'featured' => false
        ];
    }
}
