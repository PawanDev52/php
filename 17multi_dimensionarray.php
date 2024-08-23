<?php
// learning multi dimension array today in video 19

// creating a 2 dimensional array
// $multiDin = array(array(2,5,7,8),
//                   array(1,2,3,1),
//                   array(4,5,0,1));

// echo var_dump($multiDin);
// echo $multiDin[2][0];
// echo "<pre>";
// print_r($multiDin);
// echo "</pre>";

// printing the contents of a 2 dimensional array
/*
for ($i=0; $i <count($multiDin) ; $i++) { 
    echo var_dump($multiDin[$i]);
    echo "<br>";
} */

// printing values in matrix form with nested loop
/*
for ($i=0; $i <count($multiDin); $i++) {
    for ($j=0; $j <count($multiDin[$i]) ; $j++) { 
         echo $multiDin[$i][$j];
         echo " ";
    }
    echo "<br>";
} */

// printing 3 dimension array

/* $multiDin = array(array(array(10, 20, 30, 40),
                           array(50, 60, 70, 80),
                           array(90, 10, 11, 12)),
                     array(array(13, 14, 15, 16),
                           array(17, 18, 19, 20),
                           array(21, 22, 23, 24)),      
                     array(array(25, 26, 27, 28),
                           array(29, 30, 31, 32),
                           array(33, 34, 35, 36))); */

// echo $multiDin[2][2][0];

/* for ($i=0; $i <count($multiDin); $i++) { 
    for ($j=0; $j <count($multiDin[$i]) ; $j++) { 
        for ($k=0; $k <count($multiDin[$i][$j]) ; $k++) { 
             echo $multiDin[$i][$j][$k];
             echo " ";
        }
        echo "<br>";
    }
    echo "<br>";
} */

// trying 4 dimension array
/*
$multiDin = array(array(array(array(0,0,0,0),
                              array(0,0,0,1),
                              array(0,0,1,0)),
                        array(array(0,0,1,1),
                              array(0,1,0,0),
                              array(0,1,0,1)),
                        array(array(0,1,1,0),
                              array(0,1,1,1),
                              array(1,0,0,0))),
                  array(array(array(1,0,0,1),
                              array(1,0,1,0),
                              array(1,0,1,1)),
                        array(array(1,1,0,0),
                              array(1,1,0,1),
                              array(1,1,1,0)),
                        array(array(1,1,1,1),
                              array(1,1,1,0),
                              array(1,1,0,1))),
                  array(array(array(1,1,0,0),
                              array(1,0,1,1),
                              array(1,0,1,0)),
                        array(array(1,0,0,0),
                              array(0,1,1,1),
                              array(0,1,1,0)),
                        array(array(0,1,0,1),
                              array(0,1,0,0),
                              array(0,0,1,1))));

// echo $multiDin[0][0][0][0];

for ($i=0; $i <count($multiDin); $i++){
    for ($j=0; $j <count($multiDin[$i]); $j++){
        for ($k=0; $k <count($multiDin[$i][$j]); $k++){
            for ($l=0; $l <count($multiDin[$i][$j][$k]); $l++){
                echo $multiDin[$i][$j][$k][$l];
                echo " ";
            }
            echo "<br>";
        }
        echo "<br>";
    }
    echo "<br>";
}
*/

// multidimension assosicated array with foreach
$users = [
    ['name'=> 'paul', 'age'=> '45', 'city'=> 'noida'],
    ['name'=> 'drew', 'age'=> '41', 'city'=> 'gurgaon'],
    ['name'=> 'dholu', 'age'=> '35', 'city'=> 'patna'],
    ['name'=> 'bholu', 'age'=> '56', 'city'=> 'delhi'],
    ['name'=> 'kaliya', 'age'=> '25', 'city'=> 'surat'],
];
foreach ($users as $user) {
    foreach ($user as $value) {
        echo $value;
        echo " ";
    }
    echo "<br>";
}

?>