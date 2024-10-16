<?php
namespace App\Repositories;

use App\Models\LoanProduct;

class LoanProductRepository
{
    public function getAll()
    {
        return LoanProduct::all();
    }

}
