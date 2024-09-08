<?php
// invoke method - jab koi method baar baar call hota hai to hum class ke object ko as a method bhi call kar sakte hai invoke method ki help se

class User
{
    function getName()
    {
        echo "this is a method";
    }

    function __invoke()
    {
        echo "this is invoke method";
    }
}

$user = new User();
// $user->getName(); // normal way to call
$user(); // invoke method se object ko as a method call kar sakte hai aise
?>