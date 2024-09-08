<?php
include("config.php");

class Student
{
    public $Dbconn;
    function __construct($conn)
    {
        $this->Dbconn = $conn;
    }

    function getData()
    {
        $getStudent = $this->Dbconn->prepare("select * from students");
        $getStudent->execute();
        $result = $getStudent->fetchAll();
        // print_r($result);
        echo "<table border='1'><tr>
        <td>Id</td>
        <td>Name</td>
        <td>Course</td>
        <td>Batch</td>
        <td>City</td>
        <td>Year</td>
        </tr>";

        foreach ($result as $data) {
            echo "<tr>
            <td>" . $data['id'] . "</td>
            <td>" . $data['name'] . "</td>
            <td>" . $data['course'] . "</td>
            <td>" . $data['batch'] . "</td>
            <td>" . $data['city'] . "</td>
            <td>" . $data['year'] . "</td>
            </tr>";
        }
        echo "</table>";
    }

    function insertData()
    {
        $sqlQuery = "insert into students (`name`, `course`, `batch`, `city`, `year`) values 
        ('tumtum', 'iti', 'morning', 'jhasi', 'last')";
        $insrtData = $this->Dbconn->prepare($sqlQuery);
        $result = $insrtData->execute();
        if ($result) {
            echo "data inserted successfully";
        } else {
            echo "operation failed";
        }
    }

    function updateData()
    {
        $sqlQuery = "update students set
        name='tultul',
        course='bcom',
        batch='evening',
        city='gurgaon',
        year='first'
        where id=20";
        $insrtData = $this->Dbconn->prepare($sqlQuery);
        $result = $insrtData->execute();
        if ($result) {
            echo "data updated successfully";
        } else {
            echo "operation failed";
        }
    }

    function deleteData()
    {
        $sqlQuery = "delete from students where id=12";
        $insrtData = $this->Dbconn->prepare($sqlQuery);
        $result = $insrtData->execute();
        if ($result) {
            echo "data deleted successfully";
        } else {
            echo "operation failed";
        }
    }
}

$student = new Student($cont);
// $student->getData();
// $student->insertData();
// $student->updateData();
$student->deleteData();

?>