<?php
// method chaining - jab hum multiple methods ko ek saath call karte hai use method chaining kehte hai
// method chaining ke liye function ke end me - return $this add karna hota hai 

class Company
{
    function getName()
    {
        echo "toyota company. ";
        return $this;
    }

    function getEmp()
    {
        echo "thousands of employees. ";
        return $this; // isse this jo hai company ko return karna hai
    }

    function getOfc()
    {
        echo "company has 10 offices."; // last method me return $this likhne ki need nhi hoti
    }
}

$cp = new Company();
// $cp->getName(); // this is normal way
// $cp->getEmp();

$cp->getName()->getEmp()->getOfc(); // this is method chaining
?>