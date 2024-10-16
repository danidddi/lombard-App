<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InterestRate>
 */
class InterestRateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Процентная годовая ставка (PSK)',
            'code' => 'PSK',
            'rate' => $this->faker->randomFloat(1, 1, 20),
        ];
    }
}
