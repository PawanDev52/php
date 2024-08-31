<!-- searching data with search box -->
<form action="" method="post">
    <input type="text" name="search" placeholder="search here">
    <br><br>
    <button>Search</button>
</form>

<?php
include('./config.php');
if(isset($_POST['search'])){
    $search = $_POST['search'];
    // $student = $conn->prepare("select * from students where name='$search'"); // but this will show 
    $student = $conn->prepare("select * from students where name like '%$search%'"); // if use like - it will show all the related data also even if you search with only an alphabet
    $student->execute();
    $result = $student->fetchAll();

    echo "<table border='1'>";
    echo "<tr>
    <td>Id</td>
    <td>Name</td>
    <td>Course</td>
    <td>Batch</td>
    <td>City</td>
    <td>Year</td>
    </tr>";

    foreach ($result as $value) {
        echo "<tr>
        <td>". $value['id'] ."</td>
        <td>". $value['name'] ."</td>
        <td>". $value['course'] ."</td>
        <td>". $value['batch'] ."</td>
        <td>". $value['city'] ."</td>
        <td>". $value['year'] ."</td>
        </tr>";
    }
}
?>