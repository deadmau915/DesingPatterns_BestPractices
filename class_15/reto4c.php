<?php
/* The animal class violates the interface segregation principle, cause the class dog is implementing
a method that does not need */

    class Animal
    {
        public function fly()
        {
        }
    }

    class Dog extends Animal
    {
        public function fly()
        {
            if (! $this->hasWings) {
                throw new Exception;
            }
        }
    }