<?php 

namespace App;

class Order
{
    public string $clientName;
    public \DateTimeInterface $completionDate;
    public Budget $budget;
}