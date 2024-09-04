<?php
// learning properties of a class

class Properties
{
    public $name = "new developer";
    function getName()
    {
        echo $this->name;
    }

    function updateName($name)
    {
        $this->name = $name;
    }
}

$p1 = new Properties();
// echo $p1->name;

$p1->getName();
echo "<br>";
$p1->updateName("andy");
$p1->getName();

?>