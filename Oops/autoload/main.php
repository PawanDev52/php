<?php
// autoload - jab hame multiple files include karni hoti hai tab hum autoload ka use karte hai 
// varna hume include ya require ka use karke ek ek karke files include karni padegi

function autoLoader($class)
{
    echo $class . '.php';
    echo "<br>";
    include($class . '.php');
}
// jis class ka object create hota hai vhi class include hoti hai
spl_autoload_register('autoloader');

$t1 = new Teacher();

?>