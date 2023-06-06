<?php
interface aquatic_animal
{
    public function swim();
}

interface terrestrial_animal
{
    public function walk();
}

interface air_animal
{
    public function fly();
}

class Dog implements terrestrial_animal
{
    public function walk()
    {
        return 'This dog can walk!';   
    }
}
?>