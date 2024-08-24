<?php
// $_GET method is for getting the data of the form with get request

if ($_GET) {
  echo "User name is : " . $_GET['user_name'];
  echo "<br/>";
  echo "User password is : " . $_GET['user_password'];
}

?>