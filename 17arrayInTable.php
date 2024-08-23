<table border="1">
    <tr>
        <td>Sr. no.</td>
        <td>Name</td>
        <td>Age</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Peter</td>
        <td>22</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Peter</td>
        <td>22</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Peter</td>
        <td>22</td>
    </tr>
    <tr>
        <td>1</td>
        <td>Peter</td>
        <td>22</td>
    </tr>
</table>

<?php
$users = [
    [1, "peter", 26],
    [2, "henry", 33],
    [3, "paul", 30],
    [4, "golly", 13],
    [5, "dholu", 55]
];

for ($i=0; $i < count($users); $i++) {
    for ($j=0; $j < count($users[$i]); $j++) {
        echo $users[$i][$j];
        echo " ";
    }
    echo "<br>";
}

?>