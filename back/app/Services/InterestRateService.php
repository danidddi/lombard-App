<?php
namespace App\Services;

use App\Repositories\InterestRateRepository;

class InterestRateService
{
    protected $interestRateRepository;

    function __construct(InterestRateRepository $interestRateRepository)
    {
        $this->interestRateRepository = $interestRateRepository;
    }

    public function getRates()
    {
        return $this->interestRateRepository->getAll();
    }

    public function updateRate($code, $fields)
    {
        return $this->interestRateRepository->update($code, $fields);
    }

    public function getRate($code)
    {
        return $this->interestRateRepository->show($code);
    }
}
