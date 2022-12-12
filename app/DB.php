<?php

namespace App;

class DB {
    private static ?DB $instance = null; // A nullable static property called instance who's type is the current DB class

    private function __construct(public array $config) // New constructor that takes the property of configuration
    {
        echo 'Instance Created <br /> ';
    }

    public static function getInstance(array $config): DB {
        if(self::$instance === null){ // If instance is null then set it to the new instance of the DB class
            self::$instance = new DB($config);
        }

        return self::$instance;
    }

}