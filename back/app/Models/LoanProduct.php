<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class LoanProduct extends Model
{
    /** @use HasFactory<\Database\Factories\LoanProductFactory> */
    use HasFactory;

    protected static function boot()
    {
        parent::boot();
    }

    public function interestRate()
    {
        return $this->belongsTo(InterestRate::class);
    }
}
