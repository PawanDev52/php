<?php
$users = [
    [1, "peter ford", "japan"],
    [2, "henry seth", "bihar"],
    [3, "paul smith", "keral"],
    [4, "golly bold", "rajasthan"],
    [5, "dholu roy", "gujraat"]
];

echo "<table border='1'>";
echo "<tr>
    <td>Sr. No.</td>
    <td>Name</td>
    <td>State</td>
    </tr>";

    for ($i=0; $i < count($users); $i++) {
    echo "<tr>";
    for ($j=0; $j < count($users[$i]); $j++) {
        echo "<td>";
        echo $users[$i][$j];
        // echo " ";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>