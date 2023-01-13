<?php 

namespace App\BudgetsStates;

use App\Budget;

class Finished extends BudgetStatus
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException('Finalized budget cannot receive discounts');
    }
}