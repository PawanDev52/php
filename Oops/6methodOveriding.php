<?php
// Method Overiding
// if a method is available in parent and child class then methods of child class will override the methods of parent class so this is method overriding

class Teacher
{
    public $city = "delhi";
    function nextExam()
    {
        echo "next exam is maths";
    }

    function age()
    {
        echo "the age is 40";
    }
}

// $t1 = new Teacher();
// $t1->nextExam();

class students extends Teacher
{
    public $city = "patna";
    function age()
    {
        echo "the age is 14";
    }
}

$s1 = new students();
// $s1->nextExam();
// $s1->age();
echo $s1->city;

?>