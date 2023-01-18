<?php 

namespace App;

use App\BudgetsStates\Finished;
use App\Http\HttpAdapter;

class BudgetRecord
{
    private HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function record(Budget $budget): void
    {
        if (!$budget->currentState instanceof Finished) {
            throw new \DomainException('Only finalized quotes can be registered via API');
        }

        $this->http->post('http://api.budget.register', [
            'value' => $budget->value,
            'quantityItems' => $budget->quantityItems
        ]);
    }
}