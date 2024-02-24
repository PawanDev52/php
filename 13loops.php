<?php
// learning loops today video 12, 13, 14, 15
// for loops

// for ($a = 0; $a < 5; $a++) {
//     echo "the value of a is $a <br>";
// }

// while loop

// $i = 0;
// while ($i <= 5) {
//     echo $i+1;
//     echo "<br>";
//     $i++;
// }

// do while loop
// echo "Welcome to do while loop <br>";

/*
$x = 1;
do {
    echo $x;
    echo "<br>";
    $x++;
} while ($x <= 10);
*/

// for each loop
echo "Welcome to for each loop <br>";
$arry = array("banana", "apple", "grapes", "orange", "pineapple");
// echo count($arry);

// one way
/* for ($i=0; $i < count($arry); $i++) { 
    echo $arry[$i];
    echo "<br>";
} */

// good way
foreach ($arry as $key => $value) {
    echo "the value of key $key is $value. <br>";
}

?>