<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cookies with form</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="user" placeholder="Enter user name">
    <br /><br />
    <button name="button" value="set">Set Cookies</button>
    <br /><br />
    <button name="button" value="display">Display Cookies</button>
    <br /><br />
    <button name="button" value="delete">Delete Cookies</button>
  </form>
</body>
</html>

<?php
// how to set, display, and delete cookies

if (isset($_POST['button'])) {
  if ($_POST['button'] == 'set') {
    $val = $_POST['user'];
    setcookie('client', $val, time() + (86400));
    echo "cookie is set";
  }

  if ($_POST['button'] == 'display') {
    if (isset($_COOKIE['client'])) {
      echo "cookie is " . $_COOKIE['client'];
    }
  }

  if ($_POST['button'] == 'delete') {
    if (isset($_COOKIE['client'])) {
      setcookie("client", '', -1);
      echo "cookies deleted";
    }
  }
}
?>