<?php

use App\Models\InterestRate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loan_products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->date('date_start_loan');
            $table->date('date_end_loan');
            $table->double('sum_loan')->unsigned();
            $table->double('sum_realize_loan')->unsigned();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loan_products');
    }
};
