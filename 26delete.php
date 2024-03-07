<?php
// learning how to delete records in video 31

$servername = "localhost";
$username = "root";
$password = "";
$database = "pawandev";

$connection = mysqli_connect($servername, $username, $password, $database);

if(!$connection){
    die("we failed to connect to the database: ". mysqli_connect_error());
}
else{
    echo "Connection was successful <br>";
}

$sql = "DELETE FROM `newtable` WHERE `class` = 'vicky' LIMIT 10";
$result = mysqli_query($connection, $sql);

$aff = mysqli_affected_rows($connection);
echo "Number of affected rows: $aff <br>";

if($result){
    echo "Record deleted successfully!";
}
else{
    $err = mysqli_error($connection);
    echo "Can't delete records due to this error: $err";
}
?>