<?php

/* CLASSES AND OBJECTS */
require_once 'Transactions.php'; // Including the transactions.php file so transaction can be called in this file

// $transaction = (new Transaction(100, 'Transaction 1')); //Creating a variable from the class (transaction) in the transactions.php file
// $transaction->addTax(8);
// $transaction->addDiscount(10); //give a 10% discount

$transaction1 = (new Transaction(100, 'Transaction 1'))
    ->addTax(8) //Method Chaining
    ->addDiscount(10)
    ->getAmount();

$transaction2 = (new Transaction(200, 'Transaction 2')) // You can make multiple objects of the same class
    ->addTax(8) //Method Chaining
    ->addDiscount(15)
    ->getAmount();
// $transaction->amount = 15; // You can target and edit the value of objects within a class

// var_dump($transaction->amount); // to access the object within the class you use $variable->class-object

// var_dump($transaction->getAmount()); // Using a public function to access a private objects

var_dump($transaction1, $transaction2);