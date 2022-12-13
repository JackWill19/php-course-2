<?php

declare(strict_types=1);

namespace App;

class Toaster { // You can use 'final class Toaster' to make it so that this class cannot be inherited
    protected array $slices; // Setting slices to an empty array
    protected int $size; // Setting size variable to 2

    public function __construct()
    {
        $this->slices = [];
        $this->size = 2;
    }

// Function that compares if the amount of slices is less than the size if so add slice to slices
// You can also add final to methods so they cannot be overwritten
    public function addSlice($slice): void { 
        if(count($this->slices) < $this->size){
            $this->slices[] = $slice;
        }
    }

// A function that loops through each iteration of slices array and assigns $i to the index of the value and $slice to the value itself
    public function toast () {
        foreach($this->slices as $i => $slice){ // Each iteration becomes an individual slice with the index of $i
            echo($i + 1) . ': Toasting ' . $slice . "<br>";
        }
    }
}