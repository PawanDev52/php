<?php
// Uploading files and moving files to a folder after upload

if($_FILES['uploadfile']){
    $path = $_FILES['uploadfile']['name'];
    // $paths = $_FILES['uploadfile'] ['tmp_name'];
    // echo $path;
    // echo $paths;
    $upload_path = "./uploads/".$path;
    if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $upload_path)){
        echo "File uploaded successfully!";
    }else{
        die("failed to upload");
    }
}else{
    die("no file found");
}
?>