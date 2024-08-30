<?php
// edit and delete data from table
// deleting with particular id
// include("./config.php");
// $students = $conn->prepare("delete from students where id='14'");
// echo $students->execute();
?>

<?php
// deleting with button
include("./config.php");
$students = $conn->prepare("select * from students");
$students->execute();
$result = $students->fetchAll();

echo "<table border='1'>";
echo "<tr>
<td>Id</td>
<td>Name</td>
<td>Course</td>
<td>Batch</td>
<td>City</td>
<td>Year</td>
<td colspan='2'>Operations</td>
</tr>";

foreach ($result as $student) {
    echo "<tr>
    <td>" . $student['id'] . "</td>
    <td>" . $student['name'] . "</td>
    <td>" . $student['course'] . "</td>
    <td>" . $student['batch'] . "</td>
    <td>" . $student['city'] . "</td>
    <td>" . $student['year'] . "</td>
    <td><form method='post'>
    <button name='delete' value=" . $student['id'] . ">Delete</button>
    </form></td>
    <td><a href='update.php?id=". $student['id'] ."'>Edit</a></td>
    </tr>";
}
echo "</table>";

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $student = $conn->prepare("delete from students where id='$id'");
    if ($student->execute()) {
        echo "record deleted successfully";
    } else {
        echo "failed to delete";
    }
}
?>