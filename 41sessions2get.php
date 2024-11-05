<?php
// getting sessions data here

session_start(); // for accessing session data we have to start the session here also

if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'];
    echo "<br> Your favourite category is " . $_SESSION['favCat'];
} else {
    echo "Please login to continue";
}
?>