<?php

use App\Budget;
use App\BudgetRecord;
use App\Http\CurlHttpAdapter;

require_once 'vendor/autoload.php';

$budget = new Budget();
$budget->value = 1521.5;
$budget->quantityItems = 5;
$budget->ends();

$budgetRecord = new BudgetRecord(new CurlHttpAdapter());
$budgetRecord->record($budget);