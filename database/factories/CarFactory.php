<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=> $this->faker->unique()->randomNumber(),
            'name' => $this->faker->name,
            'brand' => $this->faker->word,
            'model' => $this->faker->word,
            'year' => $this->faker->year,
            'color' => $this->faker->colorName,
            'seats' => $this->faker->numberBetween(2, 7),
            'price_per_day' => $this->faker->randomFloat(2, 50, 500),
            'available' => $this->faker->boolean,
            'created_at' => $this->faker->date(),
            'updated_at' => $this->faker->date(),
        ];
    }

    public function unavailable(): static
    {
        return $this->state(fn (array $attributes) => [
            'available' => false,
        ]);
    }
}
