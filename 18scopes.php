<?php
// learning scopes of local / global variables in video 20

$a = 89;
$b = 78;
$c = 99;

function printValue(){
    global $a, $b; // give me the access to the global variable
    $a = 100;
    $b = 1000;
    echo "the value of your variable a is $a and b is $b";
}

echo $a;
echo "<br>";

printValue();
echo "<br> the value of your variable a is $a and b is $b";
echo "<br>";

// echo var_dump($GLOBALS);
echo var_dump($GLOBALS["c"]);
echo var_dump($GLOBALS["a"]);

?>