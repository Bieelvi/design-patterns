<?php 

namespace App;

use App\Taxes\Tax;

class TaxCalculator
{
    public function calculate(Budget $budget, Tax $tax): float
    {
        return $tax->TaxCalculator($budget);
    }
}