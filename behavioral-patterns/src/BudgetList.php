<?php

namespace App;

use App\BudgetsStates\Finished;

class BudgetList implements \IteratorAggregate
{
    /** @var Budget[] */
    private array $budgtes;

    public function __construct()
    {
        $this->budgtes = [];
    }

    public function addBudget(Budget $budget): void
    {
        $this->budgtes[] = $budget;
    }

    public function getFinalizedBudgets(): array
    {
        return array_filter(
            $this->budgtes, 
            fn(Budget $b) => $b->currentState instanceof Finished
        );
    }

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->budgtes);   
    }
}
