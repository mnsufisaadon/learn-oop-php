<?php

// abstract class prevent instantiation
// abstract function is like template.
// the child class must have the abstracted function.


// now we cannot instantiate the Creature class
abstract class Creature
{
    public $hand = 2; // abstract class can have properties.

    public function eat()
    {
        echo "Eating...";
    }

    // we force all the children class to have below method!
    abstract public function doSomething();
}

class Human extends Creature
{
    // public function eat()
    // {
    //     echo "Eating burger...";
    // }

    // try to comment below method, it will trigger error.
    public function doSomething()
    {
        echo "I am reading...";
    }
}

(new Human)->eat();
echo((new Human)->hand);