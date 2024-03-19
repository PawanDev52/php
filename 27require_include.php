<?php
// learning require and include in video 33

// include is used to include a file 
// if there is any error in that file still this code will execute!
// it will show only warning
// include 'db_connect.php';

// in require it makes required the condition otherwise code will not execute 
// 
require 'db_connect.php';
echo "this file";


?>