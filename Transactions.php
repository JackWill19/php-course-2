<?php

declare(strict_types=1);

// Class is blueprint (PLans for a house for example)
// Object is instace of blueprint (The house itself)

class Transaction { // two main features of a transaction should be the amount and a description
    private float $amount; // Creating two variables that have private accessability
    private string $description;

    // You are not required to define a constructor in your class, but if you wish to pass any parameters on object construction then you need one.
    // __construct is a method used to initialise class properties and other set up tasks that need to be done when an object is first created
    public function __construct(float $amount, string $description){ // __construct gets called every time a new object is created
        $this->amount = $amount; // Refers to the instance of which the method was called
        $this->description = $description;
    } 

    public function addTax(float $rate): Transaction{ // Returning as Transaction instance
        $this->amount += $this->amount * $rate / 100; // working out tax by multiplying the amount by the rate and dividing it by 100 and then adding it onto the amount
        return $this;
    }

    /* The method subtracts the discounted amount from the original transaction amount, and then returns the Transaction object itself. This allows you to call multiple methods on the same onject
       This allows the method to be used in a "chainable" way, where multiple methods can be called on the same object in a single statement. */

    public function addDiscount(float $rate): Transaction{
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }

    public function getAmount(): float {
        return $this->amount;
        return $this;
    }
}
