<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pizzas>
 */
class pizzasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */protected $model = \App\Models\Pizzas::class;
    public function definition()
    {
        return [
            "pizza-name"=>fake()->unique()->words(2, true),
            "extra"=>fake()->sentence($nbwords=4 , $variableNbwords=true),
            "size"=>fake()->randomElement(['Small', 'Medium', 'Large','X-Large']),
            "price" => fake()->numberBetween(50, 300),
            "pic"=>fake()->imageUrl()
        ];
    }
}
