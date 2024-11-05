<?php
// session in php

// set session here

session_start(); // used to start the session

$_SESSION['username'] = "Henry";
$_SESSION['favCat'] = "Books";
echo "We have saved your session";

?>