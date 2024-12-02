<?php
// Learning operators today video no. 9
// Operators in PHP
/*
1. Arithmetic operators
2. Assignment operators
3. Comparison operators
4. Logical operators
*/

$a = 45;
$b = 7;
// 1. Arithmetic operators
// echo "for a + b the output is " . $a + $b . "<br>"; // bracket and without bracket both will work
// echo "for a - b the output is " . ($a - $b) . "<br>";
// echo "for a * b the output is " . $a * $b . "<br>";
// echo "for a / b the output is " . ($a / $b) . "<br>";
// echo "for a % b the output is " . ($a % $b) . "<br>";
// echo "for a ** b the output is " . ($a ** $b) . "<br>";

// 2. Assignment operators

// $x = $a;
// echo "for x, the value is " . $x . "<br>";

// $a += 5; // $a = $a + 5
// echo "for a, the value is " . $a . "<br>";

// $a -= 5;
// echo "for a, the value is " . $a . "<br>";

// $a *= 5;
// echo "for a, the value is " . $a . "<br>";

// $a /= 5;
// echo "for a, the value is " . $a . "<br>";

// $a %= 5; // $a = $a % 5
// echo "for a, the value is " . $a . "<br>";

// 3. Comparison operators

$x = 8;
$y = 5;

echo "for x == y, the output is ";
// echo var_dump($x == $y);
// echo var_dump($x > $y);
// echo var_dump($x < $y);
// echo var_dump($x <> $y);
// echo var_dump($x >= $y);
// echo var_dump($x <= $y);
echo "<br>";

// 4. Logical operators

$m = true;
$n = false;

echo "for m & n, the result is ";
// echo var_dump($m and $n);
echo var_dump($m && $n);
echo "<br>";

echo "for m or n, the result is ";
// echo var_dump($m or $n);
echo var_dump($m || $n);
echo "<br>";


echo "for !m, the result is ";
echo var_dump(!$m);
echo "<br>";

?>