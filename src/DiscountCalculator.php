<?php 

namespace App;

use App\Discounts\Discount500ValuesMore;
use App\Discounts\Discount5ItemsMore;
use App\Discounts\NoDiscount;

class DiscountCalculator
{
    public function calculate(Budget $budget): float
    {
        $chainDiscounts = new Discount5ItemsMore(
            new Discount500ValuesMore(
                new NoDiscount(NULL)
            )
        );

        $calculaedDiscount = $chainDiscounts->calculateDiscount($budget); 

        $discountLog = new DiscountLog();
        $discountLog->inform($calculaedDiscount);

        return $calculaedDiscount;
    }
}