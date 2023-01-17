<?php 

namespace App\Taxes;

use App\Budget;

class Ikcv extends TaxWith2Rates
{
    protected function mustApplyMaximumRate(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->quantityItems > 3;
    }

    protected function calculateMaximumRate(Budget $budget): float
    {
        return $budget->value * 0.04;
    }

    protected function calculateMinimumRate(Budget $budget): float
    {
        return $budget->value * 0.025;
    }
}