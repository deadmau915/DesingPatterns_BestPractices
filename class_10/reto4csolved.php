<?php
    class Animal
    {
        public bool $hasWings;

        public function __construct()
        {
            $this->hasWings = false;
        }

        public function fly()
        {
            // ...
        }
    }

    class Dog extends Animal
    {
        public function fly()
        {
            if (!$this->hasWings) {
                throw new Exception('This dog cannot fly!');
            }
        }

    }
?>