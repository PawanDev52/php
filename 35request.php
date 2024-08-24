<?php
// $_REQUEST method works with both get and post methods
// $_REQUEST - it is a super global variable which is already defined in php.

// echo $_REQUEST['user_name'];
// echo "<br/>";
// echo $_REQUEST['user_email'];
// echo "<br/>";
// echo $_REQUEST['user_password'];
// echo "<br/>";
// echo $_REQUEST['user_address'];

foreach ($_REQUEST as $key => $value) {
    echo $key . " is - " . $value;
    echo "<br/>";
}

?>