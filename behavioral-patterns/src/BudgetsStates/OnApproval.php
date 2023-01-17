<?php 

namespace App\BudgetsStates;

use App\Budget;

class OnApproval extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->value * 0.05;
    }

    public function approves(Budget $budget): void
    {
        $budget->currentState = new Approved();
    }

    public function reproaches(Budget $budget): void
    {
        $budget->currentState = new Disapproved();
    }
}