<?php 

namespace App;

use App\BudgetsStates\BudgetStatus;
use App\BudgetsStates\OnApproval;

class Budget
{
    public int $quantityItems;
    public float $value;
    public BudgetStatus $currentState;

    public function __construct()
    {
        $this->currentState = new OnApproval();
    }

    public function applyExtraDiscount(): float
    {
        return $this->value -= $this->currentState->calculateExtraDiscount($this);
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
}