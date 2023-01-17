<?php 

namespace App;

class GenerateRequest
{
    private float $budgetValue;
    private int $quantityItems;
    private string $clientName;

    public function __construct(float $budgetValue, int $quantityItems, string $clientName)
    {
        $this->budgetValue = $budgetValue;
        $this->quantityItems = $quantityItems;
        $this->clientName = $clientName;
    }

    public function getBudgeValue(): float
    {
        return $this->budgetValue;
    }

    public function getQuantityItems(): int
    {
        return $this->quantityItems;
    }

    public function getClientName(): string
    {
        return $this->clientName;
    }
}