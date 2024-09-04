<?php
// starting oops with php

class MathOperations
{
    // public $val=30; // used for creating variables in class
    function sum($a, $b)
    {
        return $a + $b;
    }

    function multi($a, $b)
    {
        echo $a * $b;
    }

    function sub($a, $b)
    {
        echo $a - $b;
    }

    function divi($a, $b)
    {
        echo $a / $b;
    }
}

$math = new MathOperations();
echo $math->sum(56, 67);
echo "<br>";
// echo $math->sum(46, 87);
$math->multi(5, 4);

// $math1 = new MathOperations();
// echo "<br>";
// echo $math1->sum(100, 600);

?>