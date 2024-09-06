<?php
// constants - constants are the variable which value can't be changed
// you can call the constants directly without creating the object of that class

class ConstantDemo
{
    private const clgName = "iitm"; // we can make it public private or protected also
    function getclgName()
    {
        // echo self::clgName; // constant ko call karne ke liye hum self ka use karte hai
        echo ConstantDemo::clgName; // another method
        // echo $this->clgname; // with this method we can only call variables not constants
    }
}

// echo ConstantDemo::clgName;
$cd = new ConstantDemo();
$cd->getclgName();

?>