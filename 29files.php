<?php
// learning open and close files in video 35

$fptr = fopen("myfile1.txt", "r");
echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file. Please enter a valid filename");
}

?>