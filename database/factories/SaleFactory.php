<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sale_owner_id' => rand(1,2),
            'consumer_name' => fake()->name(),
            'item_code' => fake()->ean8(),
            'item_quantity' => fake()->numberBetween($min = 1, $max = 10),
            'item_price' => fake()->numberBetween($min = 50, $max = 500),
            'shipping_fee' => fake()->numberBetween($min = 20, $max = 200),
            'mode_of_payment' => fake()->numberBetween($min = 1, $max = 2),
            'payment_status' => fake()->numberBetween($min = 1, $max = 4),
            'courier' => fake()->numberBetween($min = 1, $max = 3),
            'location' => fake()->State(),
        ];
    }
}
