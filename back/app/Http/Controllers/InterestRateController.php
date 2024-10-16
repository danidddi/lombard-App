<?php

namespace App\Http\Controllers;

use App\Http\Requests\InterestRateRequest;
use App\Models\InterestRate;
use App\Services\InterestRateService;
use Illuminate\Http\Request;

class InterestRateController extends Controller
{

    protected $interestRateService;

    function __construct(InterestRateService $interestRateService)
    {
        $this->interestRateService = $interestRateService;
    }

    public function index()
    {
        return $this->interestRateService->getRates();
    }

    public function update(InterestRateRequest $request, $code)
    {
        $fields = $request->validated();
        $result = isset($code)
            ? $this->interestRateService->updateRate($code, $fields)
            : response()->json(['msg' => 'Необходимо указать код процентной ставки!'], 404);
        return $result;
    }

    public function show($code)
    {
        $result = isset($code)
            ? $this->interestRateService->getRate($code)
            : response()->json(['msg' => 'Необходимо указать код процентной ставки!'], 404);
        return $result;
    }

}
