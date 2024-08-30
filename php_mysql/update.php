<?php
// update records
include("./config.php");
if (isset($_GET['id'])) {
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
    <button name="update" value="<?php echo $id ?>" >Update</button>
</form>

<!-- <?php
if(isset($_POST['update'])){
    $id= $_POST[['update']];
    include("./config.php");
    $student = $conn->prepare("update students set where id='$id'");
    if($student->execute()){
        echo "Updated successfully";
    }else{
        echo "failed to update";
    }
}
?> -->