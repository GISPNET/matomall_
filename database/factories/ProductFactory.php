<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'description'=>fake()->sentence(),
            'body'=>fake()->sentence(),
            'price'=>fake()->doubleval(),
            'slug'=>fake()->slug(),
            //'store_id')->constrained()->onDelete('cascade');
        ];
    }
}
