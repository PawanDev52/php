<?php
// with static method we can directly call a property or method without creating its object
// when a property or method is getting called again and again then we make it static for making our task fast

class Honda
{
    static public $model = "latest";
    static function cpname()
    {
        echo "Honda";
    }
}

// calling with non static
// $hd = new Honda();
// $hd->cpname();

// calling with static
Honda::cpname();
echo Honda::$model;

?>