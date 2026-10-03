<?php

$d = [
    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],
    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],
    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]
];

echo "<table style='border-collapse:collapse;'>";

foreach ($d as $r => $c) {

    echo "<tr>";

    echo "<th style='border:1px solid black;padding:10px;'>$r</th>";

    foreach ($c as $x) {
        echo "<td style='border:1px solid black;padding:10px;'>$x</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>