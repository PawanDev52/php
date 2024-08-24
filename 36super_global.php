<?php
// Super Global Variables - 
// 1. $GLOBALS
$a = 10;
$b = 45;

echo "<pre>";
print_r($GLOBALS); // it will show all the globally created variables. (which are created by user).
// print_r($_SERVER); // you will get the all server details
echo "</pre>";

?>