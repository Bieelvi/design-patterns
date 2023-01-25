<?php 

namespace App;

class DiscountLog
{
    public function inform(float $calculatedDiscount): void
    {
        echo "Inform calculted discount log: $calculatedDiscount";
    }
}