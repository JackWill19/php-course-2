<?php

namespace App;

abstract class Field { // Abstract means you cannot make objects of this class

    public function __construct(protected $name)
    {
        
    }
// Adding abstract to a function means that all classes that extend Field must implement the render() method
    abstract public function render(): string; 
}