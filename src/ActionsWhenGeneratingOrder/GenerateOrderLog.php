<?php 

namespace App\ActionsWhenGeneratingOrder;

use App\Order;

class GenerateOrderLog implements ActionsAfterGeneratingOrder
{
    public function execute(Order $order): void
    {
        echo "Generate order log";
    }
}