<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SeedLoanProducts extends Command
{
    protected $signature = 'seed:loan-products';
    protected $description = 'Seed loan products with interest rates';

    public function handle()
    {
        // Выполнение сидера
        Artisan::call('db:seed', ['--class' => 'LoanProductSeeder']);
        $this->info('Loan products seeded successfully!');
    }
}
