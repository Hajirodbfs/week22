<?php

$a = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

$total = 0;
$even = 0;
$odd = 0;
$min = $a[0];
$max = $a[0];

foreach ($a as $i => $x) {

    echo "<p>$x</p>";

    $total += $x;

    if ($x % 2 == 0)
        $even += $x;
    else
        $odd += $x;

    if ($x < $min)
        $min = $x;

    if ($x > $max)
        $max = $x;
}

echo "Total = $total<br>";
echo "Even Total = $even<br>";
echo "Odd Total = $odd<br>";
echo "Minimum = $min<br>";
echo "Maximum = $max<br>";

?>