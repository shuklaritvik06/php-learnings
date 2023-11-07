<?php
$y = 10;
function registerUser()
{
    global $y;
    echo $y;
    echo "User";
}

function sum($x = 10, $y = 10)
{
    echo $x + $y;
}
sum(1, 2);

$subtract = function ($x = 10, $y = 10) {
    return $x - $y;
};
$subtract(1, 2);
$mul = fn($x = 10, $y = 10) => $x * $y;
$mul(1, 2);
registerUser();
