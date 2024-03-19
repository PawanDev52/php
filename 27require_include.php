<?php
// learning require and include in video 33

// include is used to include a file, if there is any error in that file still this code will execute! it will show only warning.
// include 'db_connect.php';

// In require - it makes required the condition otherwise code will not execute, it will not only show warning but error also.
require 'db_connect.php';

$sql = "SELECT * FROM `newtable`";
$result = mysqli_query($connect, $sql);

// find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database <br>";
while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['sr no'] . " Hello " . $row['name'] .", your email is - '" . $row['email'] ."' and your consern is - " . $row['consern'] . "!!";
    echo "<br>";
}
?>