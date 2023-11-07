<?php
/*
------PHP Data Types-------

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

/*
------Variables-------

- Must prefixed with $
- Must start with letter or _
- Can't start with a number
- Case Sensitive
*/

$name = "Ramesh";
$age = 20.23;

echo $age;
echo 'Ramesh ki age ' . $age . ' hai';
echo "Ramesh ki age $age hai"  ;

// Mathematical Operations

echo 5+5;
echo 5/5;
echo 5%2;
echo 5-2;
echo '4'+'3';
echo '4'+2; 

// Constants

define("name", "Ramesh");
echo name;