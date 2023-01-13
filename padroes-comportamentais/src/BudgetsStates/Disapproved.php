<?php 

namespace App\BudgetsStates;

use App\Budget;

class Disapproved extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException('Disapproved budget cannot receive discounts');
    }

    public function ends(Budget $budget): void
    {
        $budget->currentState = new Finished();
    }
}