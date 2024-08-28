<?php
// connection to database with mysql
$host = "localhost";
$username = "root";
$password = "";
$database = "college";

$conn = new mysqli($host, $username, $password, $database);
// if(!$conn){
//     die('we failed to connect');
// }else{
//     echo "Connection successful";
// }

if ($conn->connect_error) {
    die("some error " . $conn->$connect_error);
}
echo "connection successful";
echo "<br/>";

$result = $conn->query('show tables')->fetch_all();
print_r($result);

?>