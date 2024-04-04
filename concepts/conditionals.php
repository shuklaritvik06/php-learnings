<?php
/*
 < Less Than
 > Greater than
 <= Less than or equal to
 == Equal to
 === Identical to
 != Not equal to
 !== Not identical to
*/

$age = 10;

if ($age == 10) {
    echo "Hello";
} else {
    echo "Sorry You dont got it!";
}

echo date("F D M H");

$arr = [1, 2, 3];
if (empty($arr)) {
    echo "Array is empty";
} elseif (!empty($arr)) {
    echo "Array is not empty";
}

echo empty($arr) ? "1" : "0";

echo null ?? "hi";

switch ($age) {
    case 10:
        echo "Hi";
        break;
    default:
        echo "Hey";
}

for ($a = 1; $a < $age; $a++) {
    echo $a;
}

$x = 0;
while ($x < 10) {
    echo $x;
    $x++;
}

$x = 1;
do {
    echo $x;
    $x++;
} while ($x < 10);

for ($a = 1; $a < count([1, 2, 3, 4]); $a++) {
    echo [1, 2, 3, 4][$a];
}

foreach ([1, 2, 3] as $a) {
    echo $a;
}

foreach ([1, 2, 3] as $index => $a) {
    echo $index . ' - ' . $a;
}