<?php 

namespace App\ActionsWhenGeneratingOrder;

use App\Order;

interface ActionsAfterGeneratingOrder
{
    public function execute(Order $order): void;
}