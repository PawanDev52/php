<?php
// learning fopen and fclose and fread methods of files in video 35
// $fptr = fopen("myfile.txt", "r");
// // echo var_dump($fptr);
// if(!$fptr){
//     die("Unable to open this file. Please enter a valid filename!");
// }
// $content = fread($fptr, filesize("myfile.txt"));
// fclose($fptr);
// echo $content;
?>

<!-- ============================================================================= -->

<?php
// read files
// $file = 'data.txt';
// $myfile = fopen($file, 'r') or die('unable to read file');
// echo fread($myfile, filesize($file));
// fclose($myfile);


if (isset($_FILES['file'])) {
    $file = $_FILES['file']['tmp_name'];
    $myfile = fopen($file, 'r') or die('unable to read file');
    echo fread($myfile, filesize($file));
    fclose($myfile);
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <br><br>
    <button>read file</button>
</form>