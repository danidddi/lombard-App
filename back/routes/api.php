<?php

use App\Http\Controllers\InterestRateController;
use App\Http\Controllers\LoanProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/products', [LoanProductController::class, 'index']);
Route::get('/rates', [InterestRateController::class, 'index']);
Route::get('/rates/{code}', [InterestRateController::class, 'show']);
Route::patch('/rates/{code}', [InterestRateController::class, 'update']);
