<?php

// class is like a template
// the variable in it is called property eg. $email
// public means it is accessible outside the class
// while protected can only be accessible inside class.
// function in class is called method!
// class can received parameters and will be passed to constructor. eg. _construct

class User
{
    protected $email; // this is a protected property
    public $username; // public property

    public function __construct($email, $username) // this is a contructor
    {
        $this->email = $email;
        $this->username = $username;

        // $this->email means we are selecting the property of this class
        // the $this is required because the email is owned by User class.
    }

    public function email() // this is an example of getter method.
    {
        return $this->email;

        // because of the email property is protected.
        // we need a getter function to get the value of the email.
    }
}