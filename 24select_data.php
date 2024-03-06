<?php
// learning select or read data in video 29

$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

$connect = mysqli_connect($servername, $username, $password, $database);

if(!$connect){
    die("sorry we failed to connect:". mysqli_connect_error());
}
else{
    echo "Connection was successful!<br>";
}

$sql = "SELECT * FROM `contact us`";
$result = mysqli_query($connect, $sql);

// find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database <br>";

// display the rows returned by the sql query
if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // we can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sr no'] . " Hello " . $row['name'] ." your email is " . $row['email'] ." and your consern is " . $row['consern'];
        echo "<br>";
    }
}

?>