<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rentals>
 */
class RentalsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_id' => $this->faker->numberBetween(1, 10),
            'from' => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'to' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'total_price' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
