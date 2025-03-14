<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payments>
 */
class PaymentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomFloat(2, 1, 1000),
            'payment_date' => $this->faker->dateTimeThisYear(),
            'payment_method' => $this->faker->randomElement(['cash', 'credit_card', 'paypal']),
            'payment_status' => $this->faker->randomElement(['paid', 'pending', 'failed']),
            'payment_details' => $this->faker->sentence(),
        ];
    }
}
