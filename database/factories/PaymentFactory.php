<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => rand(1, 10),
            'service_id' => rand(1, 10),
            'from' => $this->faker->dateTimeInInterval('-2 month', '-1 month'),
            'to' => $this->faker->dateTimeInInterval('+1 month', '+2 month'),
            'amount' => rand(100, 999),
            'active' => rand(0, 2),
        ];
    }
}
