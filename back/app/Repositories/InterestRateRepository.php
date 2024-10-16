<?php
namespace App\Repositories;


use App\Models\InterestRate;

class InterestRateRepository
{
    public function getAll()
    {
        return InterestRate::all();
    }

    public function update($code, $fields)
    {
        $rate = InterestRate::where('code', $code)->first();
        $rate->update($fields);
        return $rate;
    }


    public function show($code)
    {
        return InterestRate::where('code', $code)->first();
    }

}
