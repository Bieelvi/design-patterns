<?php 

namespace App\Taxes;

use App\Budget;

abstract class Tax 
{
    private ?Tax $otherTax;

    public function __construct(Tax $otherTax = null)
    {
        $this->otherTax = $otherTax;
    }

    abstract protected function specificCalculationPerformed(Budget $budget): float;

    public function TaxCalculator(Budget $budget): float 
    {
        return $this->specificCalculationPerformed($budget) + $this->calculateAnotherTax($budget);
    }

    private function calculateAnotherTax(Budget $budget): float
    {
        return $this->otherTax === null ? 0 : $this->otherTax->TaxCalculator($budget);
    }
}