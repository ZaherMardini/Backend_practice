<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
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
            'Employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['200$','500$','1000$']),
            'location' => 'remote',
            'schedule' => fake()->randomElement(['Full time','Part time']),
            'url' => fake()->url(),
            'featured' => fake()->randomElement([true,false])
        ];
    }
}
