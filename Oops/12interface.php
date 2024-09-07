<?php
// interface will tell us what method should be initilize in the child class
// interface ko extends nhi karte implement karte hai

// difference between interface and abstract class - 
// interface ke ander properties nhi aa sakti but abstract me properties and methods dono aa sakte hai
// interface ke ander method sirf public ho sakta hai or abstract me public or proctected dono ho sakta hai
// interface ke ander saare methods abstract hi hote hai by default but abstract keyword likhne ki need nhi hoti

interface Productftr
{
    function imgs();
    function owndtl();
}

class Product implements Productftr
{
    function imgs()
    {
        echo "images loaded";
    }

    function owndtl()
    {
        echo "owner details";
    }
}

$pdt = new Product();
$pdt->owndtl();

?>