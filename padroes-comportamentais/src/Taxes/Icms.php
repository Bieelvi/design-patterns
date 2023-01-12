<?php 

namespace App\Taxes;

use App\Budget;

class Icms implements Tax
{
    public function TaxCalculator(Budget $budget): float
    {
        return $budget->value * 0.1;
    }
}