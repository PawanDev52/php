<?php
// type hinting / type declaration
// type define karne se usme sirf particular type ki hi value aayegi

// function fruit(string $name)
// {
//     echo $name;
// }

// fruit("apple");

// let's try with oops also
class Fruits
{
    function fruit(string $name)
    {
        echo $name;
    }
}

$f1 = new Fruits;
$f1->fruit("mango");

?>