<?php
// delete session data

session_start();
 
session_unset(); // this will unset the session values

session_destroy(); // this will destroy the session

echo "<br> You have been logged out";

?>