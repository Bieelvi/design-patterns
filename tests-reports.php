<?php

use App\Budget;
use App\Order;
use App\Report\ExportedBudget;
use App\Report\ExportedOrder;
use App\Report\ExportedXmlFile;
use App\Report\ExportedZipFile;

require_once 'vendor/autoload.php';

$budget = new Budget();
$budget->value = 1500.89;
$budget->quantityItems = 5;

$exportedBudget = new ExportedBudget($budget);

// $exportedXmlFile = new ExportedXmlFile("budget");
// echo $exportedXmlFile->save($exportedBudget);

// $exportedZipFile = new ExportedZipFile("budget.txt");
// echo $exportedZipFile->save($exportedBudget);


$order = new Order();
$order->clientName = "Gabs";
$order->completionDate = new \DateTimeImmutable();

$exportedOrder = new ExportedOrder($order);

// $exportedXmlFile = new ExportedXmlFile("order");
// echo $exportedXmlFile->save($exportedOrder);

$exportedZipFile = new ExportedZipFile("order.txt");
echo $exportedZipFile->save($exportedOrder);