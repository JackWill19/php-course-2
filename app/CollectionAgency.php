<?php

namespace App;
// One rule of interfaces, all methods declared in interface must be implemented in the concrete classes that implement that interface
class CollectionAgency implements DebtCollector
{
    public function collect(float $owedAmount): float
    {
        $guarenteed = $owedAmount * 0.5;

        return mt_rand($guarenteed, $owedAmount); // Picking a random number between $guarenteed amount and $owedAmount
    }

}