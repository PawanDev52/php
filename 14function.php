<?php
// learning functions today in video 16
/*
function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}
$rohanDas = [34, 98, 45, 12, 98, 93];
$sumMarks = processMarks($rohanDas);

echo "Total marks scored by rohan out of 600 is $sumMarks <br>";
echo $sumMarks;
*/

// Basic Function
/*
function heading()
{
    echo "<h3>User Details</h3>";
}

function displayDetails()
{
    echo heading();
    echo "User name is demo <br/>";
    echo "User age is 20 <br/>";
    echo "User is working <br/>";
    echo "<hr/>";
}

displayDetails();
displayDetails();
displayDetails();
displayDetails();
*/

// ============================================================================================

// function with parameter
/*
function sum($a, $b){
    echo $a + $b;
    echo "<br/>";
}
sum(12, 45);
sum(34, 90);

function userdata($name, $color){
    echo "<h1 style='color:$color;'>$name</h1>";
}
userdata("tester", "green");
*/

// ==========================================================================================================

// function with return statement
function userName() {
    // echo "tommy tin"; // echo display the value
    return "tommy tin"; // return gives the output
}
echo "<h2>the user name is " . userName() . "</h2>"
?>