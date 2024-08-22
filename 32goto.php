<?php
/*
$x = 20;
echo "before go to $x <br>";

if($x==20){
    goto jump;
}
//  ---------------
echo "in between go to <br>";
echo "it will not be printed <br>";

//----------- this code will be skipped
jump:
echo "after jumb here we are!";
*/

// trying goto statement with loop
// for ($i = 0; $i < 10; $i++) {
//     echo "$i <br>";
//     if ($i == 5) {
//         goto outsideLoop;
//     }
// }
// outsideLoop:
// echo "the loop is breaked";

// while loop
// $a = 0;
// while ($a < 10) {
//     echo "$a <br>";
//     if ($a == 5) {
//         goto outsideLoop;
//     }
//     $a++;
// }
// outsideLoop:
// echo "the loop is breaked";

// Do While Loop
$a = 0;
do {
    echo "$a <br>";
    if ($a == 6) {
        goto outsideLoop;
    }
    $a++;
} while ($a < 10);
outsideLoop:
echo "loop is break";

?>