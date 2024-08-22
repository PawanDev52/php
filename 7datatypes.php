<?php
// learning data types today video 7

/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/
// String - sequence of characters
$name = "joy";
$friend = 'dholu';
var_dump($friend);
echo "$name is a friend of $friend";
echo "<br>";

// Integer - non decimal number
$income = 444;
$interest = -556;
var_dump($income);
echo "$income and $interest";
echo "<br>";

// Float - decimal point number
$income = 42.4;
$interest = 5.56;
var_dump($interest);
echo "$income and $interest";
echo "<br>";

// Boolean - can be either true or false
$x = true;
$y = false;
echo $y;
echo "<br>";
echo var_dump($y);
echo "<br>";
echo $x;
echo "<br>";
echo var_dump($x);
echo "<br>";

// Object - instnces of classes
// employee is a class ----> hary can be one object

// Array - used to store multiple values in a single variable
$frnds = array("rohan", "sohan", "mohan","shubham");
echo var_dump($frnds);
echo "<br>";
echo $frnds[1];
echo "<br>";

// NULL
$nm = NULL;
echo var_dump($nm);
?>