<?php 

namespace App\Report;

use App\Order;

class ExportedOrder implements ExportedContent
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function content(): array
    {
        return [
            'client_name' => $this->order->clientName,
            'completation_date' => $this->order->completionDate->format("Y-m-d")
        ];
    }
}