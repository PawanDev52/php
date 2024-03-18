<?php
// connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "pawandev";

// creating a connection
$connection = mysqli_connect($servername, $username, $password, $database);
if(!$connection){
    die("we failed to connect to the database: ". mysqli_connect_error());
}
else{
    echo "Connection was successful <br>";
}
?>