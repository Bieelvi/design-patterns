<?php 

namespace App;

class GenerateRequestHandle
{
    /** aqui iria as dependencias necessarias para o funcionamento do codigo */
    public function __construct()
    {
        
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

        echo "coloca no banco de dados" . PHP_EOL;

        echo "manda email avisando" . PHP_EOL;

        echo "faz o logo" . PHP_EOL;
    }
}