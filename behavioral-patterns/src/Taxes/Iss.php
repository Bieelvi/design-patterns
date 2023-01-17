<?php 

namespace App\Taxes;

use App\Budget;

class Iss implements Tax
{
    public function TaxCalculator(Budget $budget): float
    {
        return $budget->value * 0.06;
    }
}