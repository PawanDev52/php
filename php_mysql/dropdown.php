<?php
// showing data in dropdown format

include("./config.php");
$getstudent = $conn->prepare("select * from students");
$getstudent->execute();
$studentdata = $getstudent->fetchAll();
// print_r($studentdata);

echo "<select>";
echo "<option>Select name</option>";
foreach ($studentdata as $student) {
    echo "<option value=" . $student['id'] . ">" . $student['name'] . "</option>";
}
echo "</select>";
?>