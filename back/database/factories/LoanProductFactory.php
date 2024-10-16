<?php

namespace Database\Factories;

use App\Models\InterestRate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LoanProduct>
 */
class LoanProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $loanDate = $this->faker->date();
        $loanDateEnd = $this->faker->dateTimeBetween($loanDate, $loanDate . '+2 months')->format('Y-m-d');
        $sumLoan = $this->faker->randomFloat(2, 100, 10000);

        return [
            'name' => $this->faker->randomElement(['iPhone', 'Samsung Galaxy', 'Google Pixel', 'OnePlus']),
            'date_start_loan' => $loanDate,
            'date_end_loan' => $loanDateEnd,
            'sum_loan' => $sumLoan,
            'sum_realize_loan' => $sumLoan + $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
