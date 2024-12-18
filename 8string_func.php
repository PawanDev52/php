<?php
// Learning string functions today
// this is video no. 8

$name = "Jolly singh is the boss of town";
echo $name;
echo "<br>";

echo strlen($name); // for checking string length
echo "<br>";

echo substr($name, 12); // it will slice the string
echo "<br/>";

echo is_string($name); // for checking if it is string or not
echo "<br/>";

echo "the length of my string is " . strlen($name);
echo "<br>";
echo "the length of " . "my string is " . strlen($name);
echo "<br>";
echo str_word_count($name); // for counting the words
echo "<br>";
echo strrev($name); // for reversing the string
echo "<br>";
echo strpos($name, "is"); // for checking the position in string
echo "<br>";
echo str_replace("Jolly", "dolly", $name); // for replacing the string
echo "<br>";
echo str_repeat($name, 10); // for repeating the string
echo "<br>";
echo rtrim("<pre>  this   is a good    string   </pre>");
// echo "<br>";
echo "<pre>";
echo rtrim("          this   is a good    string   ");
echo "<br>";
echo ltrim("        this is       good         string         ");
echo "</pre>";

$a = 123;
echo is_int($a); // for checking int
echo "<br/>";

echo rand(); // for generating random number

?>