<?php
// mysql with php oops class

$host = "localhost";
$username = "root";
$password = "";

$cont = new PDO("mysql:host=$host;dbname=college", $username, $password);
$cont->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>