<?php
// learning working of files in video 34
// $a = readfile("myfile.txt"); // if you execute only this command then total no. of characters will not return.
// echo $a; // if you read file like this it will reture the total no. of characters in the end.

// readfile("myfile.txt");

// if you read file by this method it will not return total no. of characters in the end.
// text file ki tarah html file ko bhi read kar sakte hai same method se.

// =======================================================================================

// create file
// $filename = "dummy.txt";
// $content = "this is a dummy file";
// $file = fopen($filename, 'w') or die('unable to create file');
// fwrite($file, $content);
// fclose($file);
// echo "file created";
?>

<form action="" method="post">
  <input type="text" name="filename" placeholder="Enter file name">
  <br /><br />
  <textarea name="content"></textarea>
  <br /><br />
  <button name="button">Create file</button>
</form>
<?php
// creating file with form

if (isset($_POST['filename'])) {
    $filename = $_POST['filename'];
    $content = $_POST['content'];
    $file = fopen($filename, 'w') or die('unable to create file');
    fwrite($file, $content);
    fclose($file);
    echo "file created";
}
?>