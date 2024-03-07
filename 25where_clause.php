<?php
// learning where clause in video 30

$servername = "localhost";
$username = "root";
$password = "";
$database = "pawandev";

$connection = mysqli_connect($servername, $username, $password, $database);
if(!$connection){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
    echo "Connection was successful!<br>";
}

$sql = "SELECT * FROM `newtable` WHERE `class` = 'panda'";
$result = mysqli_query($connection, $sql);

// usage of where clause to fetch data - it's a kind of filter to fetch data as per we want
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database<br>";

$no = 1;
if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        echo $no. " your class is ". $row['class']. " and your marks is ". $row['marks'];
        echo "<br>";
        $no = $no + 1;
    }
}

// usage of where clause to update data
$sql = "UPDATE `newtable` SET `marks` = 'jercy' WHERE `class` = 'panda'";
$result = mysqli_query($connection, $sql);

echo var_dump($result);
$aff = mysqli_affected_rows($connection);
echo "Number of affected rows: $aff";
if($result){
    echo "<br> we updated the record successfully!";
}
else{
    echo "we failed to update the record";
}

?>