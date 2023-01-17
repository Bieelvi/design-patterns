<?php

use App\Budget;
use App\BudgetList;

require_once 'vendor/autoload.php';

$budget = new Budget();
$budget->value = 150;
$budget->quantityItems = 5;
$budget->approves();

$budget2 = new Budget();
$budget2->value = 1550;
$budget2->quantityItems = 55;
$budget2->reproaches();

$budget3 = new Budget();
$budget3->value = 150.45;
$budget3->quantityItems = 15;
$budget3->approves();
$budget3->ends();

$budgetList = new BudgetList();
$budgetList->addBudget($budget);
$budgetList->addBudget($budget2);
$budgetList->addBudget($budget3);

echo "ALL BUDGETS" . PHP_EOL;
foreach ($budgetList as $budge) {
    echo "Value: " . $budge->value . PHP_EOL;
    echo "Quantity: " . $budge->quantityItems . PHP_EOL;
    echo "State: " . get_class($budge->currentState) . PHP_EOL;

    echo PHP_EOL;
}

echo "FINISHED BUDGETS" . PHP_EOL;
foreach ($budgetList->getFinalizedBudgets() as $budget) {
    echo "Value: " . $budget->value . PHP_EOL;
    echo "Quantity: " . $budget->quantityItems . PHP_EOL;
    echo "State: " . get_class($budget->currentState) . PHP_EOL;

    echo PHP_EOL;
}