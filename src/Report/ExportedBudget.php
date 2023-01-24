<?php 

namespace App\Report;

use App\Budget;

class ExportedBudget implements ExportedContent
{
    private Budget $budget;

    public function __construct(Budget $budget)
    {
        $this->budget = $budget;
    }

    public function content(): array
    {
        return [
            'quantity_items' => $this->budget->quantityItems,
            'value' => $this->budget->value
        ];
    }
}