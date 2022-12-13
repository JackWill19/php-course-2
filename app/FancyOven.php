<?php

declare(strict_types=1);

namespace App;

class FancyOven  {
// The __construct() method accepts a ToasterPro object as an argument and assigns it to a $toaster property.
// This allows the class to access the ToasterPro object and use its methods and properties.
 
    public function __construct(private ToasterPro $toaster) {
        
    }

        public function fry() {

        }

        public function toast() {
            $this->toaster->toast(); // so we can call the toast() function directly from ToasterPro 
        }

        public function toastBagel() {
            $this->toaster->toastBagel();
        }
}