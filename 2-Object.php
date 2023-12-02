<?php

// need to require the below file so that we can use User class.
require "1-Class.php";


// Object is the instance of Class
// to create an object, we need to use `new` keyword following by the class.
// we can create multiple objects from a class.


$student = new User('student@test.com', 'John');
$teacher = new User('teacher@test.com', 'Melissa');
$parent = new User('parent@test.com', 'Doe');

// so now we have 3 Objects of User.
// each email property of the object has different value from others.

var_dump($student, $teacher, $parent);




// uncomment the below code to differentiate between protected and public

// ------------------ PROTECTED starts -----------------------------

// var_dump($student->email);

// the above code will throw an error because we cannot get the protected property outside class.
// so how can we get the email property since it is protected?
// this is why we need the getter method.
// uncomment the below code to get the email value;

// var_dump($student->email());

// ------------------ PROTECTED ends -----------------------------


// ------------------ PUBLIC starts -----------------------------

// uncomment the below code to get the username value;

// var_dump($student->username);

// John is returned from above code.
// means we can get the username property directly by calling like above.

// ------------------ PUBLIC ends -----------------------------