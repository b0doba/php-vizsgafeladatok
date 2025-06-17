<?php

namespace Database\Factories;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departures>
 */
class DeparturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'destination_id' => Destination::factory(),
            'departure_date' => $this->faker->dateTimeBetween('+30 days', '+300 days'),
            'price' => $this->faker->numberBetween(2, 10),
        ];
    }
}
