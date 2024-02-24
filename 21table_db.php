<?php
// creating tables in database in video 26
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

// create a table in database
$sql = "CREATE TABLE `newtable` (`roll num` INT(5) NOT NULL AUTO_INCREMENT , `class` VARCHAR(10) NOT NULL , `marks` VARCHAR(10) NOT NULL , PRIMARY KEY (`roll num`))";

$result = mysqli_query($cont, $sql);

if ($result) {
    echo "the table was created successfully!";
}
else{
    echo "the table was not created successfully because of this error --> ". mysqli_error($cont);
}

?>