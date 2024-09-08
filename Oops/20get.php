<?php
// get method - get method tab call hota hai jab class me koi method ya properties exist nhi karti or use object ke saath call karne ki koshish ki jaati hai us case me error ki jagh message show karane ke liye
// jab private property ya aisa method jo exist nhi karta us case me get method call hota hai

class User
{
    public $name = "php dev";
    private $age = 23;

    function __get($prop)
    {
        echo "$prop property do no exist";
    }
}

$user = new User();
// echo $user->name; // normal way when property exist
// echo $user->nama; // this property do not exist in that case get method will work
echo $user->age; // this is private property so here get method will work
?>