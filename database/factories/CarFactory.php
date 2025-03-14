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
            'name' => $this->faker->name,
            'brand' => $this->faker->word,
            'model' => $this->faker->word,
            'year' => $this->faker->year,
            'color' => $this->faker->colorName,
            'seats' => $this->faker->numberBetween(5, 7),
            'price_per_day' => $this->faker->numberBetween(30, 50),
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
