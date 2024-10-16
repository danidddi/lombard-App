<?php
namespace App\Services;

use App\Repositories\LoanProductRepository;

class LoanProductService
{
    protected $loanProductRepository;

    function __construct(LoanProductRepository $loanProductRepository)
    {
        $this->loanProductRepository = $loanProductRepository;
    }

    public function getProducts()
    {
        return $this->loanProductRepository->getAll();
    }
}
