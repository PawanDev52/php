<?php
// set method - jab hum kisi kisi aisi property ki value set karne ki koshish karte hai jo private hai ya exist nhi karti tab call hota hai

class User
{
    private $name = "andy";
    function __set($property, $value)
    {
        if (property_exists($this, $property)) { // is method se private property ki value set kar sakte hai
            $this->$property = $value;
        } else {
            echo "no";
        }

        // echo "$property can't be set with $value as this property do not exist";
    }
    function getName()
    {
        echo $this->name;
    }
}

$user = new User();
$user->getName();

echo "<br>";
$user->name = "peter singh";

$user->getName();
?>