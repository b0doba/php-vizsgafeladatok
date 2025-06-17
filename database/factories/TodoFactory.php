<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
class TodoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(),
            'priority' => $this->faker->randomDigit(),
            'completed' => $this->faker->boolean(),
            'deadline' => $this->faker->dateTimeBetween('+2 days', '+30 days')->format('Y-m-d'),
        ];
    }
}
