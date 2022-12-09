<?php

declare(strict_types = 1);

// namespace Jack; // Creating a namespace
namespace PaymentGateway\Paddle; //Creating a namespace with subnamespaces

// use DateTime;

// class Transaction {
//     public function __construct() {
//         // var_dump(new CustomerProfile());
//         var_dump(new \DateTime()); // adding a backlash \ when trying to call a function tells php to look for the function globally Or you can import it using ** use DateTime; **  
//     }
// }

class Transaction {
    public function __construct() {
        // var_dump(new CustomerProfile());
        var_dump(new  \Notification\Email()); // Because Notification\Email isnt in the same folder as transaction, you have to use a \ to escape the Paddle folder 
    }
}