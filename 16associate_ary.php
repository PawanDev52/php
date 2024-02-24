<?php
// learning associate arrays today in video 18
/* normal array called indexed array
$ary = array('this', 'that', 'what');
echo $ary[0];
echo $ary[1];
echo $ary[2]; */

// Associate array
$favCol = array('shubham' => 'red',
                'rohan' => 'green',
                'sohan' => 'blue',
                8 => 'brown');

echo $favCol["rohan"];
echo "<br>";
echo $favCol[8];

foreach ($favCol as $key => $value) {
        echo "the favourite colour of $key is $value <br>";
        echo $key;
        echo "<br>";
}


?>