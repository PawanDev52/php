<?php
// abstract method - jo methods parent class me abstracted hai vo methods child class me bnana compulsory hai
// abstract methods parent class me sirf define hote hai initialize child class me karne padte hai
// abstract class ka object create nhi ho sakta. uski child class ka hi ho sakta hai

abstract class Product
{
    abstract function productdtl();
    abstract function productimg();
    abstract function productown();
}

class CrProduct extends Product
{
    function productdtl()
    {
        echo "Product details";
    }

    function productimg()
    {
        echo "Product image";
    }

    function productown()
    {
        echo "Product owner";
    }
}

$cp = new CrProduct();
// $cp->productdtl();
// $cp->productimg();
$cp->productown();

?>