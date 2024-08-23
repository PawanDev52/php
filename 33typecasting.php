<?php
// $a = 500;
$a = true;
var_dump($a);

$a = (string) $a; // for changing the data type
var_dump($a);

$b = "20";
$b = (int) $b;
var_dump($b);

$c = 1;
$c = (float) $c;
var_dump($c);

$d = "hellow";
$d = (boolean) $d;
var_dump($d);

$e = 15;
$e = (array) $e;
var_dump($e);

$f = 20;
// $f = (unset) $f; // no longer working
$f = (object) $f;
var_dump($f);
// you can not convert array into string directly like above
?>