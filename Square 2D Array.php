<?php

$a = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

foreach ($a as $r) {

    echo "<tr>";

    foreach ($r as $x) {
        echo "<td style='border:1px solid black;padding:10px;'>$x</td>";
    }

    echo "</tr>";
}

?>