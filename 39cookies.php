<?php
// set cookies in php

setcookie("fruit", "apple", time() + (86400));
setcookie("color", "red", time() + (86400));

if (isset($_COOKIE['fruit'])) {
    echo "Current cookie is " . $_COOKIE['fruit'];
} else {
    echo "No cookies set";
}

echo "<br/>";

if (isset($_COOKIE['color'])) {
    echo "Current cookie is " . $_COOKIE['color'];
} else {
    echo "No cookies set";
}

echo "<br/>";

print_r($_COOKIE);

?>