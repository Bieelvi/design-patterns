<?php 

namespace App;

use App\ActionsWhenGeneratingOrder\ActionsAfterGeneratingOrder;

class GenerateRequestHandle
{
    /** @var ActionsAfterGeneratingOrder[] */
    private array $actions = [];

    /** aqui iria as dependencias necessarias para o funcionamento do codigo */
    public function __construct()
    {
        
    }

    public function addActionsWhenGeneratingOrder(ActionsAfterGeneratingOrder $action)
    {
        $this->actions[] = $action;
    }

    public function execute(GenerateRequest $generateRequest)
    {
        $budget = new Budget();
        $budget->value = $generateRequest->getBudgeValue();
        $budget->quantityItems = $generateRequest->getQuantityItems();

        $order = new Order();
        $order->clientName = $generateRequest->getClientName();
        $order->completionDate = new \DateTimeImmutable();
        $order->budget = $budget;

        foreach ($this->actions as $action) {
            $action->execute($order);
        }
    }
}