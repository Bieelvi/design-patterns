<?php 

namespace App\Taxes;

use App\Budget;

interface Tax 
{
    public function TaxCalculator(Budget $budget): float;
}