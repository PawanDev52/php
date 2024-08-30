<?php
// inserting data in mysql table with static data
// include('./config.php');
// $query = $conn->prepare("
// INSERT into `students` (`name`, `course`, `batch`, `city`, `year`)
// VALUES ('henry', 'bba', 'evening', 'patna', '3rd')
// ");

// $result = $query->execute();
// if ($result) {
//     echo "Data inserted successfully";
// } else {
//     echo "Operation failed";
// }
?>

<!-- inserting dynamic data with form -->
<form action="" method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <br /><br />
    <input type="text" name="course" placeholder="Enter your course">
    <br /><br />
    <input type="text" name="batch" placeholder="Enter your batch">
    <br /><br />
    <input type="text" name="city" placeholder="Enter your city">
    <br /><br />
    <input type="text" name="year" placeholder="Enter your year">
    <br /><br />
    <button>Add data</button>
</form>

<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];
    include('./config.php');
    $query = $conn->prepare("
INSERT into `students` (`name`, `course`, `batch`, `city`, `year`)
VALUES ('$name', '$course', '$batch', '$city', '$year')
");

    $result = $query->execute();
    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Operation failed";
    }
}
?>