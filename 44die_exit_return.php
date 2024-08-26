<?php
// die, exit and return

$a = 10;
$b = 20;

echo $a - $b;
echo "<br />";

// exit(); // for exit from the code
// exit("first echo printed");

echo $a + $b;
echo "<br />";

echo test();
echo "<br />";

// die(); // it will stop the execution of below code

echo $a * $b;
echo "<br />";

// return;

echo $a / $b;
echo "<br />";

function test(){
    // return; // return will only stop the execution of the code inside the function
    // die; // it will stop the execution of the code inside and outside of function
    // exit; // exit works similar to die
    echo "after 20";
}

?>