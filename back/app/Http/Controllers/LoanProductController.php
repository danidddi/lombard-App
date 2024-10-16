<?php

namespace App\Http\Controllers;

use App\Models\LoanProduct;
use App\Services\LoanProductService;
use Illuminate\Http\Request;
use \Illuminate\Http\JsonResponse;
class LoanProductController extends Controller
{
    protected $loanProductService;

    function __construct(LoanProductService $loanProductService)
    {
        $this->loanProductService = $loanProductService;
    }
    public function index() : JsonResponse
    {
        return response()->json($this->loanProductService->getProducts());
    }

}
