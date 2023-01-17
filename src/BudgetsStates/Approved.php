<?php 

namespace App\BudgetsStates;

use App\Budget;

class Approved extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->value * 0.02;
    }

    public function ends(Budget $budget): void
    {
        $budget->currentState = new Finished();
    }
}