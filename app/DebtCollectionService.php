<?php

namespace App;

// you build an interface much like a class
// an interface is like a contract
// you can use extends to include multiple interfaces
class DebtCollectionService
{
    public function collectDebt(DebtCollector $collector){
        var_dump($collector instanceof Rocky);
        $owedAmount = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owedAmount);

        echo 'Collected $' . $collectedAmount . ' out of $' . $owedAmount . PHP_EOL;
    }
}