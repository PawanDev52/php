<?php
// Getting form data with post method

if ($_POST) {
  echo "User name is : " . $_POST['user_name'];
  echo "<br/>";
  echo "User password is : " . $_POST['user_password'];
  echo "<br/>";
  echo "User email is : " . $_POST['user_email'];
}

?>