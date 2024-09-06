<?php
// late static binding - isse aap current class ke static method or properties ko call kar sakte ho inheritance ke ander jab method or properties ka naam same hota hai

class CountrySale
{
    static public $totalsale = 1000;
    function getSale()
    {
        echo static::$totalsale; // if we use static instead of self it will be work as late static
    }

    function getName()
    {
        static::areaName();
    }

    static function areaName()
    {
        echo "India";
    }
}

class CitySale extends CountrySale
{
    static public $totalsale = 50;
    static function areaName()
    {
        echo "Noida";
    }
}

$sale = new CitySale();
// $sale->getSale();
$sale->getName();

?>