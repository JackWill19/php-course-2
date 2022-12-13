<?php

declare(strict_types=1);

namespace App;

// Extends means ToasterPro inherits all public and protected methods, properties and constants from Toaster
class ToasterPro extends Toaster {
    // public array $slices = []; // As we inherit from Toaster, anything that doesnt change from the parent can be removed as it gets inherited instead
    // protected int $size = 4; // Size has to stay as we are changing the value
                          // If $size was private in Toaster you would not be able to change it
                          // If it is set to public in Toaster you cannot make it private in ToasterPro
                          // Now we are using a constructor we dont need this overwriting 
                          
    public function __construct() {
        parent::__construct(); // Calling __construct from Toaster so variables get initialised to then be used in ToasterPro
        $this->size = 4;
}

    public function addSlice($slice): void { 
        parent::addSlice($slice);
    }

// A function that loops through each iteration of slices array and assigns $i to the index of the value and $slice to the value itself
// This function gets inherited from Toaster as it does not get changed

    // public function toast () {
    //     foreach($this->slices as $i => $slice){ // Each iteration becomes an individual slice with the index of $i
    //         echo($i + 1) . ': Toasting ' . $slice . "<br>";
    //     }
    // }

        public function toastBagel () {
        foreach($this->slices as $i => $slice){
            echo($i + 1) . ': Toasting ' . $slice . ' as a bagel .' . "<br>";
        }
    }
}