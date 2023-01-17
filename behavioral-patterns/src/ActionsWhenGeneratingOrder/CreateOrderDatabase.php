<?php 

namespace App\ActionsWhenGeneratingOrder;

use App\Order;

class CreateOrderDatabase implements ActionsAfterGeneratingOrder
{
    public function execute(Order $order): void
    {
        echo "Create order in databse";
    }
}