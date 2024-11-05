<?php
// getting sessions data here

session_start(); // for accessing session data we have to start the session here also

echo "Welcome " . $_SESSION['username'];

echo "<br> Your favourite category is " . $_SESSION['favCat'];

?>