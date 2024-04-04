<?php
// Simple Array

$numbers = [1, 2, 3, 4];
print_r($numbers);

$fruits = array(1, 2, 4, 4);
echo $fruits[0];


// Associative Array (We can give index we wnt)
$colors = [
    1 => "Red",
    4 => "blue"
];

$colors = [
    "color1" => "Red",
    "color2" => "blue"
];

$body = [
    [
        "color1" => "Red",
        "color2" => "blue"
    ],
    [
        1 => "Red",
        4 => "blue"
    ]
];

echo json_encode($body);

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj));