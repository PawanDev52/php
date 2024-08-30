<?php
// inserting data in mysql table with static data
include('./config.php');
$query = $conn->prepare("
INSERT into `students` (`name`, `course`, `batch`, `city`, `year`)
VALUES ('henry', 'bba', 'evening', 'patna', '3rd')
");

$result = $query->execute();
if ($result) {
    echo "Data inserted successfully";
} else {
    echo "Operation failed";
}
?>

