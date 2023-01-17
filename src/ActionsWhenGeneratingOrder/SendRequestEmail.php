<?php 

namespace App\ActionsWhenGeneratingOrder;

use App\Order;

class SendRequestEmail implements ActionsAfterGeneratingOrder
{
    public function execute(Order $order): void
    {
        echo "Send request by email";
    }
}