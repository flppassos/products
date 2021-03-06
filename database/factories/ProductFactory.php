<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'cover' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat(1, 10, 30),
            'description' => $this->faker->sentence(),
            'stock' => $this->faker->randomDigit(),
        ];
    }
}
