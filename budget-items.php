<?php

use App\Budget;
use App\BudgetCacheProxy;
use App\BudgetItem;

require_once 'vendor/autoload.php';

$budgetItem1 = new BudgetItem();
$budgetItem1->value = 150;
$budgetItem2 = new BudgetItem();
$budgetItem2->value = 100;
$budgetItem3 = new BudgetItem();
$budgetItem3->value = 150;
$budgetItem4 = new BudgetItem();
$budgetItem4->value = 50;
$budgetItem5 = new BudgetItem();
$budgetItem5->value = 250;
$budgetItem6 = new BudgetItem();
$budgetItem6->value = 100;

$budget1 = new Budget();
$budget1->addItem($budgetItem1);
$budget1->addItem($budgetItem2);
$budget2 = new Budget();
$budget2->addItem($budgetItem3);
$budget3 = new Budget();
$budget3->addItem($budgetItem4);
$budget3->addItem($budgetItem5);
$budget3->addItem($budgetItem6);

$budget1->addItem($budget2);
$budget2->addItem($budget3);

$budgetCachePoxy = new BudgetCacheProxy($budget1);

echo $budgetCachePoxy->value();
echo $budgetCachePoxy->value();
echo $budgetCachePoxy->value();
echo $budgetCachePoxy->value();
echo $budgetCachePoxy->value();
echo $budgetCachePoxy->value();
echo $budgetCachePoxy->value();
echo $budgetCachePoxy->value();