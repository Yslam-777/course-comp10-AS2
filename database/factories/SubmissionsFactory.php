<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Submissions;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Submissions>
 */
class SubmissionsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'content' => fake()->text(100),
            'submitted_at' => fake()->dateTimeBetween("-1 month", 'now'),
            "grade" => fake()->numberBetween(60,100),
            'feedback' => fake()->sentence(),
        ];
    }
}
