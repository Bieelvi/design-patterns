<?php 

namespace App\Discounts;

use App\Budget;

class Discount5ItemsMore extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->quantityItems > 5)     
            return $budget->value * 0.1;

        return $this->nextDiscount->calculateDiscount($budget);
    }
}