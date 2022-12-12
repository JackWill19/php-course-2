<?php

declare(strict_types = 1);

// namespace Jack; // Creating a namespace
namespace App\PaymentGateway\Paddle; //Creating a namespace with subnamespaces

use App\Enums\Status;

// use DateTime;

// class Transaction {
//     public function __construct() {
//         // var_dump(new CustomerProfile());
//         var_dump(new \DateTime()); // adding a backlash \ when trying to call a function tells php to look for the function globally Or you can import it using ** use DateTime; **  
//     }
// }

// class Transaction {
//     public function __construct() {
//         var_dump(new  \Notification\Email()); // Because Notification\Email isnt in the same folder as transaction, you have to use a \ to escape the Paddle folder (12:04 PHPnamespace Tutorial)
//     }
// }

// class Transaction {
//     public function __construct() {
//         var_dump(explode(',', 'Hello World')); // As explode() is a global function, you dont need to reference where it comes from, unlike classes where you need to call the path where it is set
//     } // If functions arent set locally they fall back to the global namespace (To use the global function, prefix it with \ )
// }

// function explode($seperator, $str) { // Now because the function has been set locally, the local function will execute instead of the global function
//     return 'foo';
// }

class Transaction {
    private string $status;

    public function __construct()
    {
        $this->setStatus(Status::PENDING);
    }

    public function setStatus(string $status): self
    {
        if(! isset(Status::ALL_STATUSES[$status])){ // Checks if the status passed has been set in All statuses array
            throw new \InvalidArgumentException('Invalid Status'); // If not, display an error
        }
        $this->status = $status; // If it is set, set $this to status
        return $this;
    }
}