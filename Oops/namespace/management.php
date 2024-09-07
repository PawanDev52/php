<?php
// import teacher and student file

include("./teacher.php");
include("./student.php");

$teacher = new teacher\JoiningDtls();
$teacher->joiningdate();

echo "<br />";

$student = new student\JoiningDtls();
$student->joiningdate();

?>