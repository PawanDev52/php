<?php
// learning require and include in video 33

// include is used to include a file, if there is any error in that file still this code will execute! it will show only warning.
// include 'db_connect.php'; //method 1
// include('db_connect.php'); //method 2 include can include a file multiple times but include once will include only one time.
// include_once("./db_connect.php"); // include once if the file is included then do not include again.


// In require - it makes required the condition otherwise code will not execute, it will not only show warning but error also.
// require 'db_connect.php';
require_once 'db_connect.php';

$sql = "SELECT * FROM `newtable`";
$result = mysqli_query($connection, $sql);

// find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database <br>";
while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['roll num'] . " Your Class is " . $row['class'] .", your marks is - '" . $row['marks'] . "!!";
    echo "<br>";
}
?>