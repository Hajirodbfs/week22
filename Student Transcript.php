<?php

$t = [
    "Semester 1" => [
        ["Course"=> "subject1", "CW1"=>9, "MidTerm"=>26, "CW2"=>10, "Final"=>40, "Total"=>85, "Status"=>"Pass"],
        ["Course"=> "subject2", "CW1"=>9, "MidTerm"=>26, "CW2"=>10, "Final"=>40, "Total"=>85, "Status"=>"Pass"],
        ["Course"=> "subject3", "CW1"=>9, "MidTerm"=>26, "CW2"=>10, "Final"=>40, "Total"=>85, "Status"=>"Pass"]
    ],

    "Semester 2" => [
        ["Course"=> "subject1", "CW1"=>9, "MidTerm"=>26, "CW2"=>10, "Final"=>0, "Total"=>45, "Status"=>"Fail"],
        ["Course"=> "subject2", "CW1"=>9, "MidTerm"=>26, "CW2"=>10, "Final"=>40, "Total"=>85, "Status"=>"Pass"],
        ["Course"=> "subject3", "CW1"=>9, "MidTerm"=>26, "CW2"=>10, "Final"=>40, "Total"=>85, "Status"=>"Pass"]
    ]
];

echo "<table style='border-collapse:collapse;'>";

foreach ($t as $s => $a) {

    foreach ($a as $b) {

        echo "<tr>";

        echo "<td style='border:1px solid black;padding:10px;'>$s</td>";

        foreach ($b as $c) {
            echo "<td style='border:1px solid black;padding:10px;'>$c</td>";
        }

        echo "</tr>";
    }
}

echo "</table>";

?>