<!DOCTYPE html>
<html lang="en">
<head>
  <title>Session with form</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="user" placeholder="Enter your name">
    <br /><br />
    <button name="button" value="set">Set session</button>
    <br /><br />
    <button name="button" value="get">Get session</button>
    <br /><br />
    <button name="button" value="delete">Delete session</button>
  </form>
</body>
</html>

<?php
session_start();

if (isset($_POST['button'])) {
  if ($_POST['button'] == 'set') {
    $val = $_POST['user'];
    $_SESSION['man'] = $val;
  }

  if ($_POST['button'] == 'get') {
    echo $_SESSION['man'];
  }

  if ($_POST['button'] == 'delete') {
    session_destroy();
  }
}
?>