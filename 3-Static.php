<?php

// static method cannot interact with non-static properties
// static means we are interacting with class directly without instance
// we should use static method we dont interact with any non-static properties
// we dont need to create new object to use static method. eg. User::greet()

class User
{
    protected $email;
    public $username;

    public function __construct($email, $username)
    {
        $this->email = $email;
        $this->username = $username;
    }

    public function email()
    {
        return $this->email;
    }

    // example of static method, no $this exists
    public static function greet($name)
    {
        echo "Hello from $name";
    }

    // btw this is an alternative to reinstitiate new instance from static method.
    // so dont need to use `new` anymore.
    public static function create(...$params)
    {
        $instance = new static(...$params);

        return $instance;
    }
}


// create new objects
$student = User::create('student@test.com', 'John');
$teacher = User::create('teacher@test.com', 'Melissa');


var_dump($student->email(), $teacher->email());