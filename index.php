<?php
// require_once 'Transactions.php'; // Including the transactions.php file so transaction can be called in this file
/* CLASSES AND OBJECTS 


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

// Nullsafe Operators

require_once 'Transactions.php';
require_once 'Customer.php';
require_once 'PaymentProfile.php';

$transaction = new Transaction(2, 'test');

echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'foo';*/

// NAMESPACE TUTORIAL
// A way to organize code into logical groups and prevent naming conflicts between different code modules
// A namespace is a top-level container for classes, functions, and constants, and it provides a way to avoid naming collisions between code from different sources.
// Typically match namespace with folder structure

require_once 'PaymentGateway/Stripe/Transaction.php'; // If you try to require two files of the same name you will get an error
require_once 'PaymentGateway/Paddle/Transaction.php'; // Its the same if you try to declare different functions with the same name in different files
require_once 'PaymentGateway/Paddle/CustomerProfile.php';
require_once 'PaymentGateway/Paddle/DateTime.php';
require_once 'Notification/Email.php';


// Because different namespaces have been used, php can now tell the difference between the two same-named classes

// var_dump(new PaymentGateway\Paddle\Transaction()); // How to call a class with a specific namespace (** namespace\class() **)

// You dont have to use ** new PaymentGateway\Paddle\Transaction() ** everytime, just use (** use PaymentGateway\Stripe\Transaction; **) to simply import the class from the file

// var_dump(new Transaction()); // How to call a class with a specific namespace (** namespace\class() **)

// use PaymentGateway\Paddle\Transaction as PaddleTransaction; // Importing two classses with the same name, to fix this we need to alias one of them
// use PaymentGateway\Stripe\Transaction as StripeTransaction; // Using 'as alias-name'

use PaymentGateway\Paddle\Transaction as PaddleTransaction; // Importing two classses with the same name, to fix this we need to alias one of them
use PaymentGateway\Stripe\{Transaction, CustomerProfile}; // Calling multiple classes from the same file

$paddleTransaction = new PaddleTransaction();
$stripeTransaction = new Transaction();

var_dump($paddleTransaction, $stripeTransaction);