<?php
// update records
include("./config.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $getdata = $conn->prepare("select * from students where id='$id'");
    $getdata->execute();
    $student = $getdata->fetchAll();

    $name = $student[0]['name'];
    $course = $student[0]['course'];
    $batch = $student[0]['batch'];
    $city = $student[0]['city'];
    $year = $student[0]['year'];
}
?>

<form action="" method="post">
    <input type="text" name="name" value="<?php echo $name ?>">
    <br><br>
    <input type="text" name="course" value="<?php echo $course ?>">
    <br><br>
    <input type="text" name="batch" value="<?php echo $batch ?>">
    <br><br>
    <input type="text" name="city" value="<?php echo $city ?>">
    <br><br>
    <input type="text" name="year" value="<?php echo $year ?>">
    <br><br>
    <button name="update" value="<?php echo $id; ?>">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['update'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    $updatestdnt = $conn->prepare("update students set 
    name='$name',
    course='$course',
    batch='$batch',
    city='$city',
    year='$year' 
    where id='$id'");
    if($updatestdnt->execute()){
        header('location:editDelete.php');
    }else{
        echo "failed to update";
    }
}
?>