<?php 

namespace App;

class BudgetItem implements Budgetable
{
    public float $value;

    public function value(): float
    {
        sleep(1);
        return $this->value;    
    }
}