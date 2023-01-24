<?php 

namespace App\Taxes;

use App\Budget;

class Icms extends Tax
{
    public function specificCalculationPerformed(Budget $budget): float
    {
        return $budget->value * 0.1;
    }
}