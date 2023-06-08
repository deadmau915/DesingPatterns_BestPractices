<?php

class SingletonClass
{
    private static $instance;

    private function __construct()
    {
        // Private constructor to prevent direct instantiation
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

$singleton = SingletonClass::getInstance();

?>