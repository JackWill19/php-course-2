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

// require_once '../app/PaymentGateway/Stripe/Transaction.php'; // If you try to require two files of the same name you will get an error
// require_once '../app/PaymentGateway/Paddle/Transaction.php'; // Its the same if you try to declare different functions with the same name in different files
// require_once '../app/PaymentGateway/Paddle/CustomerProfile.php';
// require_once '../app/PaymentGateway/Paddle/DateTime.php';
// require_once '../app/Notification/Email.php';


// Because different namespaces have been used, php can now tell the difference between the two same-named classes

// var_dump(new PaymentGateway\Paddle\Transaction()); // How to call a class with a specific namespace (** namespace\class() **)

// You dont have to use ** new PaymentGateway\Paddle\Transaction() ** everytime, just use (** use PaymentGateway\Stripe\Transaction; **) to simply import the class from the file

// var_dump(new Transaction()); // How to call a class with a specific namespace (** namespace\class() **)

// use PaymentGateway\Paddle\Transaction as PaddleTransaction; // Importing two classses with the same name, to fix this we need to alias one of them
// use PaymentGateway\Stripe\Transaction as StripeTransaction; // Using 'as alias-name'

// use PaymentGateway\Paddle\Transaction as PaddleTransaction; // Importing two classses with the same name, to fix this we need to alias one of them
// use PaymentGateway\Stripe\{Transaction, CustomerProfile}; // Calling multiple classes from the same file

// $paddleTransaction = new PaddleTransaction();
// $stripeTransaction = new Transaction();

// var_dump($paddleTransaction, $stripeTransaction);

// spl_autoload_register(function($path) { // Auto loader automatically loads your classes and traits that are not already included
//     // using the __DIR__ magic constant to get the current directory, appending '/../' to it to go up one directory level, and then using the lcfirst() function to convert the first character of the $class variable to lowercase. 
//     // The str_replace() function is then used to replace backslashes ('\\') in the $class variable with forward slashes ('/'), and the resulting string is appended to the directory path with '.php' added to the end.
//     $path = __DIR__ . '/' . lcfirst(str_replace('\\', '/', $path)) . '.php';

//     require $path;
//     var_dump($path);
 
// });


// require __DIR__ . '/vendor/autoload.php'; // Requiring all loaded classes in the composer autoload file

// use App\Enums\Status;
// use App\DB;
// use App\PaymentGateway\Paddle\Transaction;



// echo $transaction::STATUS_PAID;  // :: is the scope resolution operator
// echo $transaction::class; // Will echo out the fully qualified class name

// $transaction->setStatus(Status::PAID);
// var_dump($transaction);

// $transaction = new Transaction(25, 'Transaction 1');

// var_dump(Transaction::$count); // accessing count in the transaction class
// $db = DB::getInstance([]);

// INHERITANCE TOASTER EXAMPLE

// use App\Toaster;
// use App\ToasterPro;
// use App\FancyOven;
// require __DIR__ . '/vendor/autoload.php';

// $toaster = new ToasterPro();

// $toaster->addSlice(('bread')); // Because size is set to 2, only 2 out of 3 will print
// $toaster->addSlice(('bread'));
// $toaster->addSlice(('bread'));
// $toaster->toastBagel();

// require __DIR__ . '/vendor/autoload.php';

// $fields = [
//     new App\Text('baseText'),
//     new App\Checkbox('baseCheckbox'),
//     new App\Radio('baseRadio')
// ];

// foreach($fields as $field) {
//     echo $field->render() . '<br />';
// }

// INTERFACES & POLYMORPHISM

// require __DIR__ . '/vendor/autoload.php';

// $service = new App\DebtCollectionService();
// $rocky = new App\Rocky();

// echo $service->collectDebt(new App\Rocky()) . PHP_EOL;

// MAGIC METHODS

// Special methods which overrides php's default actions when certain actionsa are preformed on an object
// All magic methods start with a double underscore __construct for example

// require __DIR__ . '/vendor/autoload.php';

// $invoice = new App\Invoice(15);

// $invoice->amount = 35;

// echo var_dump(isset($invoice->amount)) . '<br />'; // Returns true as amount has been set to 35

// unset($invoice->amount); // Unsetting the value of $amount

// var_dump($invoice) . '<br />'; // Returns false as amount has been unset

// require __DIR__ . '/vendor/autoload.php';

// $invoice = new App\Invoice();

// echo $invoice->process(1, 2, 3); // Because the process method doesnt exist in the Invoice class, the __call() method will be triggered
//                             // This will add the values to the arguments array 

// App\Invoice::process(1, 2, 3); // Calling a static method that doesnt exist so __callStatic() gets triggered

require __DIR__ . '/vendor/autoload.php';

$invoice = new App\Invoice();

// var_dump($invoice instanceof Stringable);

// var_dump(is_callable(($invoice))); // Checks if you can call $invoice as a function
// $invoice(); // Here we call the class as a function, which will trigger the __invoke() method which we have set to print ('invoked')
//             // If __invoked() wasnt set then youd be thrown a fatal error

