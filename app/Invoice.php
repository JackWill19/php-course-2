<?php

namespace App;

class Invoice {

    protected array $data = [];


    // __get() essentially gets the value of a property from an object
    public function __get(string $name) 
    {
        if(array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        return null;
    }

    // __set() sets the value to the property of an object 
    public function __set(string $name, $value): void 
    {
        $this->data[$name] = $value;
    }

    // __isset() checks to see if the property of the object has been set
    public function __isset($name)
    {
        var_dump('isset');
        return array_key_exists($name, $this->data);
    }

    // __unset() un sets the value of the property in the object
    public function __unset($name)
    {
        var_dump('unset');
        unset($this->data[$name]);
    }
}