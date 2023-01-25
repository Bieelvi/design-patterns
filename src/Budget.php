<?php 

namespace App;

use App\BudgetsStates\BudgetStatus;
use App\BudgetsStates\OnApproval;

class Budget implements Budgetable
{
    private array $items;
    public BudgetStatus $currentState;

    public function __construct()
    {
        $this->currentState = new OnApproval();
        $this->items = [];
    }

    public function applyExtraDiscount(): float
    {
        $value = $this->value();
        return $value -= $this->currentState->calculateExtraDiscount($this);
    }

    public function approves(): void
    {
        $this->currentState->approves($this);
    }

    public function reproaches(): void
    {
        $this->currentState->reproaches($this);
    }

    public function ends(): void
    {
        $this->currentState->ends($this);
    }

    public function addItem(Budgetable $item): void
    {
        $this->items[] = $item;
    }

    public function value(): float
    {
        return array_reduce(
            $this->items, 
            fn(float $accumulateValue, Budgetable $budgetable) => $budgetable->value() + $accumulateValue, 
            0
        );
    }
}