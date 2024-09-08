<?php
// call method - when a method is private or not exist in the class

class User
{
    private function getName($name)
    {
        echo $name;
    }

    function __call($name, $arguments)
    {
        // echo "$name method do not exist";
        // echo "<br>";
        // print_r($arguments);

        if (method_exists($this, $name)) { // if method is private
            // echo "$name is a private method";

            call_user_func_array([$this, $name], $arguments); // if want to call private methods
        } else {
            echo "$name method do not exist";
        }
    }
}

$user = new User();
$user->getName("sam");
echo "<br>";
// $user->setName("sam");

?>