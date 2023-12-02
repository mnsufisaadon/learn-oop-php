<?php

// inheritance is like the extending the class
// same as we create a child class while inherit all the properties and method of parent class.


// assume the Human is the parent class.

class Human
{
    public $hands = 2;
    protected $legs = 2;

    public function eat()
    {
        echo 'I love eating';
    }

    public function sleep()
    {
        echo 'I need to sleep';
    }
}

// now we create another class while extending Human class.
// we are inherit Human's properties and methods.

class Student extends Human
{
    public function getLegs()
    {
        return $this->legs;

        // we get the $legs properties even without initialize it.
        // this is because the $legs already defined in Human class.
    }
}

class Kid extends Human
{
    public function sleep()
    {
        echo 'I hate sleeping';

        // if we create new method with the same name as parent's method.
        // it will overwrite the parent's method.
    }
}


$student = new Student;

var_dump($student->getLegs());


$student->sleep();


$kid = new Kid;

var_dump($kid->sleep());

//compare these 2 codes.
// $student->sleep();
// $kid->sleep()

// Kid is overwriting the Human sleep method.