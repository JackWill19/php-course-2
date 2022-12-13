<?php

namespace App;

// you build an interface much like a class
// you can use extends to include multiple interfaces
interface DebtCollector
{
    public function collect(float $owedAmount): float;
}