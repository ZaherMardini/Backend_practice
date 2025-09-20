<?php

namespace Database\Factories;

use App\Models\present_job;
use App\Models\tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job_tag>
 */
class job_tagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'present_job_id' => present_job::factory(),
            'tag_id' => tag::factory()
        ];
    }
}
