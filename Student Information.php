<?php

$s = [
    "CA221" => [
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ],
    "CA223" => [
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ],
    "CA224" => [
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    ]
];

echo "<table style='border-collapse:collapse;'>";

foreach ($s as $id => $st) {

    echo "<tr>";

    echo "<td style='border:1px solid black;padding:10px;'>$id</td>";

    foreach ($st as $x) {
        echo "<td style='border:1px solid black;padding:10px;'>$x</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>