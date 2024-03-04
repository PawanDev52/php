<?php
// learning scopes of local / global variables in video 20

$a = 89; // this is a global variable
$b = 78;
$c = 99;

function printValue(){
    // global $a, $b; // give me the access to this global variable now here you can change or update the value of global variable 
    // uncomment the above global variable and check the difference
    $a = 100;  // this is a local variable
    $b = 1000;
    echo "the value of your variable a is $a and b is $b";
}

echo $a;
echo "<br>";

printValue();
echo "<br> the value of your variable a is $a and b is $b";
echo "<br>";

// echo var_dump($GLOBALS); // will print all the global variables
echo var_dump($GLOBALS["c"]);
echo var_dump($GLOBALS["a"]);

?>