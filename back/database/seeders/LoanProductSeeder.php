<?php

namespace Database\Seeders;

use App\Models\InterestRate;
use App\Models\LoanProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanProductSeeder extends Seeder
{

    public function run(): void
    {
        InterestRate::factory()->create();
        LoanProduct::factory()->count(20)->create();
    }
}
