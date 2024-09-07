<?php
// ek child class me hum 1 hi parent class ko inherit kar sakte hai
// but trait ki help se hum 2 parent class ko bhi 1 child class me inherit kar sakte hai
// inheritance single hi support hoti hai php ke ander but trait hum multiple use kar sakte hai

trait parentCompany
{
    function gettotal()
    {
        echo "here is total";
    }
}

trait parentCompany2
{
    function getemp()
    {
        echo "total employees";
    }
}

class Company
{
    use parentCompany;
    use parentCompany2;
}

$cmp = new Company();
$cmp->gettotal();
$cmp->getemp();

?>