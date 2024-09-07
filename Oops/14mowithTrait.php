<?php
// Method Overriding with trait

// method over riding with single trait and class
/*
trait ParentCompany
{
    function getemp()
    {
        echo "200";
    }
}

class Company
{
    use ParentCompany;
    function getemp()
    {
        echo "100";
    }
}

$c1 = new Company();
$c1->getemp();
*/

// =====================================================

// method overriding with 2 trait and 1 class

trait ParentCompany1
{
    function getemp()
    {
        echo "100";
    }
}

trait ParentCompany2
{
    function getemp()
    {
        echo "200";
    }
}

// same name hone se hum khud priority bnani padti hai ki konsa execute hoga
class Company
{
    use ParentCompany1;
    use ParentCompany2 {
        ParentCompany1::getemp insteadof ParentCompany2; // aisa karne se first trait ka function execute hoga
        ParentCompany2::getemp as getempcm2; // aise hum name change kar sakte hai jab methods ka naam same ho 
        // isse parentcompany2 ke getemp method ka naam change ho kar getempcm2 ho jayega
    }

    // function getemp()
    // {
    //     echo "300";
    // }
}

$c1 = new Company();
$c1->getemp();
echo "<br>";
$c1->getempcm2();

?>