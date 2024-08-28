<?php
// connection to database with PDO

$host = "localhost";
$username = "root";
$password = "";

// PDO - PHP data object
try {
    $conn = new PDO("mysql:host=$host;dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection successful";
} catch (PDOException $err) {
    echo "connection failed " . $err->getMessage();
}

echo "<br/>";

$result = $conn->query('show tables');
while ($row = $result->fetch(PDO::FETCH_NUM)) {
    print_r($row);
}

?>