<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'name' => fake()->words(3, true),
            'price' => fake()->numberBetween(15000, 2500000),
            'stock' => fake()->numberBetween(1, 50),
            'is_active' => true,
        ];
    }
}