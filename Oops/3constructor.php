<?php
// constructors are automatically called when create an object

class ConstructorDemo
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }

    function disply()
    {
        echo $this->name;
    }
}

// $cd = new ConstructorDemo; // both are the ways for creating an object
$cd = new ConstructorDemo("sam");
$cd->disply();

?>