<?php
// set cookies in php
// setcookie(name, value, expire, path, domain, secure, httponly); // syntax for setting cookies

setcookie("fruit", "apple", time() + (86400)); // time seconds me mention karna hota hai
setcookie("color", "red", time() + (86400));

if (isset($_COOKIE['fruit'])) {
    echo "Current fruit is " . $_COOKIE['fruit'];
} else {
    echo "No fruit set";
}

echo "<br/>";

if (isset($_COOKIE['color'])) {
    echo "Current color is " . $_COOKIE['color'];
} else {
    echo "No cookies set";
}

echo "<br/>";

print_r($_COOKIE);

?>