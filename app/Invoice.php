<?php

namespace App;

class Invoice {

    // protected array $data = [];


    // // __get() essentially gets the value of a property from an object
    // public function __get(string $name) 
    // {
    //     if(array_key_exists($name, $this->data)) {
    //         return $this->data[$name];
    //     }

    //     return null;
    // }

    // // __set() sets the value to the property of an object 
    // public function __set(string $name, $value): void 
    // {
    //     $this->data[$name] = $value;
    // }

    // // __isset() checks to see if the property of the object has been set
    // public function __isset($name)
    // {
    //     var_dump('isset');
    //     return array_key_exists($name, $this->data);
    // }

    // // __unset() un sets the value of the property in the object
    // public function __unset($name)
    // {
    //     var_dump('unset');
    //     unset($this->data[$name]);
    // }

    public function process() {
        var_dump('process'); // If process exists and is public this will be ran rather than the call and callStatic methods
                             // If it is set to private or protected, then call or callStatic will be triggered
    }

    // __call()
    // is used to handle calls to undefined methods of an object. 
    // This method is triggered when code attempts to call a method that does not exist for an object.
    public function __call(string $name, array $arguments) 
    {
        echo var_dump($name, $arguments) . '<br />';
    }

    //__callStatic()
    // Same as __call() but is used to handle calls to undefined static methods
    // It is triggered when the code attempts to call a non-existent method for the class

    public static function __callStatic(string $name, array $arguments)
    {
        echo var_dump('static', $name, $arguments) . '<br />';
    }
}