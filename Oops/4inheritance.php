<?php
// Inheritance in php
// Inheritance is when we use a function of a class in the another class also with using extends keyword.

class UserAuth
{
    function login($usertype)
    {
        echo "$usertype logged in";
    }
}

// in the below class we are using function of above class also
class Students extends UserAuth
{
    function getstdt()
    {
        echo "this is students class";
    }
}

class Teachers extends UserAuth
{
    function gettch()
    {
        echo "this is teachers class";
    }
}

$s1 = new Students();
$s1->login("student");
echo "<br>";
$s1->getstdt();

echo "<br>";

$t1 = new Teachers();
$t1->login("teacher");
echo "<br>";
$t1->gettch();

?>