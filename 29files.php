<?php
// learning fopen and fclose and fread methods of files in video 35
$fptr = fopen("myfile.txt", "r");
// echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file. Please enter a valid filename!");
}
$content = fread($fptr, filesize("myfile.txt"));
fclose($fptr);
echo $content;
?>