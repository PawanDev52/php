<?php
// connecting mysql database from php script video 24
// ways to connect to a mysql database
// MySqli extension
// PDO

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

// creating new database learning video 25
$sql = "CREATE DATABASE pawandev5";
$result = mysqli_query($conn, $sql);

// check for the database creation success
if ($result) {
    echo "the database was created successfully!";
}
else{
    echo "the database was not created successfully because of this error --> ". mysqli_error($conn);
}
echo "the result is ";
echo var_dump($result);
echo "<br>";

?>