<?php
// learning associate arrays today in video 18

// normal array called indexed array
/*
$ary = array('this', 'that', 'what');
echo $ary[0];
echo $ary[1];
echo $ary[2];
echo count($ary); // for counting the length of the array
*/

// Associate array
/*
$favCol = array('shubham' => 'red',
                'rohan' => 'green',
                'sohan' => 'blue',
                8 => 'brown');

echo $favCol["rohan"];
echo "<br>";
echo $favCol[8];
echo "<br>";

foreach ($favCol as $key => $value) {
        echo "the favourite colour of $key is $value! <br>";
        // echo $key;
        // echo "<br>";
        // echo $value;
        // echo "<br>";
}
*/

// ===============================================================================

$users = ["sandy", "mandy", "candy", "peter", "rocky", "sam"];
foreach($users as $x){
        if($x == "peter"){
                continue;
        }
        echo $x;
        echo "<br/>";
        // if($x=="candy"){
        //         break;
        // }
}

// another method of foreach loop
foreach($users as $a):
        echo $a;
        echo "<br/>";
endforeach

?>