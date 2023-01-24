<?php

use App\Budget;
use App\DiscountCalculator;
use App\TaxCalculator;
use App\Taxes\Icms;
use App\Taxes\Iss;

require 'vendor/autoload.php';

$budget = new Budget();
$budget->quantityItems = 1;
$budget->value = 200;

$taxCalculator = new TaxCalculator();

$tax1 = $taxCalculator->calculate($budget, new Icms());
$tax2 = $taxCalculator->calculate($budget, new Iss());
$tax3 = $taxCalculator->calculate($budget, new Iss(new Icms()));

echo 
    "tax 1 - " . $tax1 . PHP_EOL, 
    "tax 2 - " . $tax2 . PHP_EOL,
    "tax 3 - " . $tax3 . PHP_EOL
;

// $discountCalculator = new DiscountCalculator();

// $discount = $discountCalculator->calculate($budget);

// echo $discount;