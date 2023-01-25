<?php 

namespace App;

class ExtrinsicOrderData
{
    private string $clientName;
    private \DateTimeImmutable $completionDate;

    public function __construct(string $clientName, \DateTimeInterface $completionDate)
    {
        $this->clientName = $clientName;
        $this->completionDate = $completionDate;
    }
}