<?php
// learning how to insert data in tables in video 27
$servername = "localhost";
$username = "root";
$password = "";
$database = "pawandev";

$cont = mysqli_connect($servername, $username, $password, $database);

if (!$cont){
    die("sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "connection was successful<br>";
}


// $sql = "INSERT INTO `newtable` (`roll num`, `class`, `marks`) VALUES ('', 'panda', 'nifty')";
// $sql = "INSERT INTO `newtable` (`class`, `marks`) VALUES ('panda', 'nifty')";

// by this method also we can insert data into the table
$name = "vicky";
$destination = "greece";
$sql = "INSERT INTO `newtable` (`class`, `marks`) VALUES ('$name', '$destination')";

$result = mysqli_query($cont, $sql);

if ($result) {
    echo "the record has been submitted successfully!";
}
else{
    echo "the record was not created successfully because of this error --> ". mysqli_error($cont);
}


?>