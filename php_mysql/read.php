<?php
// first including connection file
include("./config.php");

$getstdnt = $conn->prepare("SELECT * FROM students");
$getstdnt->execute();
$stdent = $getstdnt->fetchAll();

// echo "<pre>";
// print_r($stdent);

// another method

echo "<table border=1>";

echo "<tr>
<td> Id </td>
<td> Name </td>
<td> Course </td>
<td> Batch </td>
<td> City </td>
<td> Year </td>
</tr>";

foreach ($stdent as $student) {
    echo "<tr>
    <td>" . $student['id'] . "</td>
    <td>" . $student['name'] . "</td>
    <td>" . $student['course'] . "</td>
    <td>" . $student['batch'] . "</td>
    <td>" . $student['city'] . "</td>
    <td>" . $student['year'] . "</td>
    </tr>";
}

echo "</table>";

?>