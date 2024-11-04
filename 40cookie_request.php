<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies</title>
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
    setcookie('user', $val);
    echo "cookie is set";
  }
  if ($_POST['button'] == 'display') {
    if (isset($_COOKIE['user'])) {
      echo "cookie is " . $_COOKIE['user'];
    }
  }
  // if ($_POST['button'] == 'delete') {
  //     if (isset($_COOKIE['user'])) {
  //         setcookie('user', null, -1);
  //         echo "cookies deleted";
  //     }
  // }
}
?>