<?php
// learning files method - fgets and fgetc in php in video - 36

// $fptr = fopen("myfile.txt", "r");
// echo fgets($fptr);
?>

<?php
// list of files

$path = "uploads";
$items = scandir($path); // for scanning a directory
$items = array_diff($items, array(".", "..")); // for removing same elements from the array.
// print_r($items);
foreach ($items as $item){
    echo $item;
}
?>