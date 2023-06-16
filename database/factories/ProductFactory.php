<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_product' => fake()->sentence(2),
            'slug' => fake()->slug(),
            'category_id' => 1,
            'image' => fake()->sentence(2),
            'price' => fake()->numberBetween()
        ];
    }
}
