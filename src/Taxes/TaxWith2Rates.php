<?php 

namespace App\Taxes;

use App\Budget;

abstract class TaxWith2Rates implements Tax
{
    public function TaxCalculator(Budget $budget): float
    {
        if ($this->mustApplyMaximumRate($budget))
            return $this->calculateMaximumRate($budget);
        
        return $this->calculateMinimumRate($budget);
    }

    abstract protected function mustApplyMaximumRate(Budget $budget): bool;
    abstract protected function calculateMaximumRate(Budget $budget): float;
    abstract protected function calculateMinimumRate(Budget $budget): float;
}