<?php
echo "Задание 2<br>";
$p = "Программа";
$b = "работает";
$result = $p . ' ' . $b;
echo $result."<br>";
$result.=" хорошо";
echo $result;

echo "<br>";

echo "Задание 3<br>";

for ($i = 0; $i < 6+5; $i++) {
    echo "Иванчук Илья";
}
echo "<br>";
echo "Задание 4<br>";

$a = array(2, 5, 8, 6, 3);
$sum;
foreach ($a as $key => $value)
if ($value % 2 == 0) {
    $sum += $value;
}

echo $sum;