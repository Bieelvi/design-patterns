<?php 

namespace App\BudgetsStates;

use App\Budget;

abstract class BudgetStatus
{
    abstract public function calculateExtraDiscount(Budget $budget): float;

    public function approves(Budget $budget): void
    {
        throw new \DomainException('This budget cannot be approved');
    }

    public function reproaches(Budget $budget): void
    {
        throw new \DomainException('This budget cannot be disapproved');
    }

    public function ends(Budget $budget): void
    {
        throw new \DomainException('This budget cannot be finalized');
    }
}