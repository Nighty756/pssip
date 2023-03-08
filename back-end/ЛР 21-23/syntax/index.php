<?php
//Задание1
include "index2.php";

echo "<br>";
echo "Задание 5<br>";

$s1 = 'Иванчук';
$s2 = 'адрес';
echo mb_strlen($s1);
echo "<br>";
echo $s1 . $s2;
echo "<br>";
echo mb_strtoupper($s2);

echo "<br>";
echo "Задание 6<br>";

$x = 10;
$y = 8;

echo log10($x) - exp($x+$y) + $x**$y / sqrt(2) + $y**2 + abs($x**3 * log($y));
