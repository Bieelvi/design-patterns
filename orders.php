<?php

use App\Budget;
use App\ExtrinsicOrderData;
use App\Order;

require_once 'vendor/autoload.php';

$data = new ExtrinsicOrderData(
    md5((string) rand(1, 10000)), 
    new \DateTimeImmutable()
);

$orders = [];
for ($i = 0; $i < 10000; $i++) { 
    $order = new Order();
    $order->data = $data;
    $order->budget = new Budget();

    $orders[] = $order;
}

echo memory_get_peak_usage();