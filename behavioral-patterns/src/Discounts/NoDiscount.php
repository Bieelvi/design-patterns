<?php 

namespace App\Discounts;

use App\Budget;

class NoDiscount extends Discount
{
    public function __construct()
    {
        parent::__construct(NULL);    
    }
    
    public function calculateDiscount(Budget $budget): float
    {
        return 0;
    }
}