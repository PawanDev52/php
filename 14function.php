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

// ============================================================================================

// function with parameter

?>