<?php

use App\ActionsWhenGeneratingOrder\CreateOrderDatabase;
use App\ActionsWhenGeneratingOrder\GenerateOrderLog;
use App\ActionsWhenGeneratingOrder\SendRequestEmail;
use App\GenerateRequest;
use App\GenerateRequestHandle;

require_once 'vendor/autoload.php';

$budgetValue = $argv[1];
$quantityItems = $argv[2];
$clientName = $argv[3];

$generateRequest = new GenerateRequest($budgetValue, $quantityItems, $clientName);
// essa classe iria no contructor para funcionar a injecao de dependencia
$generateRequestHandle = new GenerateRequestHandle();
$generateRequestHandle->addActionsWhenGeneratingOrder(new CreateOrderDatabase());
$generateRequestHandle->addActionsWhenGeneratingOrder(new SendRequestEmail());
$generateRequestHandle->addActionsWhenGeneratingOrder(new GenerateOrderLog());

$generateRequestHandle->execute($generateRequest);