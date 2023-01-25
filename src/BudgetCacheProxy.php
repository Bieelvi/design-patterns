<?php 

namespace App;

class BudgetCacheProxy extends Budget
{
    public float $valueCached;
    private Budget $budget;

    public function __construct(Budget $budget)
    {
        $this->valueCached = 0;
        $this->budget = $budget;
    }

    public function addItem(Budgetable $item): void
    {
        throw new \DomainException('Unable to add budget item to already cached budget');
    }

    public function value(): float
    {
        if ($this->valueCached == 0)
            $this->valueCached = $this->budget->value();
        
        return $this->valueCached;
    }
}