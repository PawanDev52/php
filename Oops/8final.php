<?php
// final keyword - when we add final keyword with any class so that class can't be inherited
// and if we use final with any method so that method can't be created in the child class with same name

// final keyword with class

// final class Honda { // if we use final so that class can't be inherited
// class Honda {}

// class Cars extends Honda {}

// $cr = new Cars();

// ==========================================================

// final keyword with method

class Honda
{
    final function cpName()
    {
        echo "Honda";
    }
}

class Cars extends Honda
{
    // function cpName(){
    //     echo "Honda City";
    // }
}

$cr = new Cars();
$cr->cpName();

?>