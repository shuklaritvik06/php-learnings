<?php
$fruits = ["a", "B", "c"];

echo count($fruits);
echo in_array("a", $fruits);

// Push, Pop
array_push($fruits, "D", "e");
array_pop($fruits);

// First element
array_shift($fruits);
array_unshift($fruits, "Ramesh");

// Remove
unset($fruits[1]);

// Split it into 2 chunks

$chunks = array_chunk($fruits, 2);
print_r($chunks);

// Merge arrays

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

print [...$arr1];
print_r(array_merge($arr1, $arr2));


// Key value combine

$a = [1, 2, 3, 4];
$b = ["Hello", "hi", "he", "eh"];
print_r(array_combine($a, $b));
print_r(array_keys(array_combine($a, $b)));
print_r(array_flip(array_combine($a, $b)));


$numbers = range(1, 20);
echo $numbers;

$newNumbers = array_map(function ($number) {
    return "Number $number";
}, $numbers);

print_r($newNumbers);

$newNumbers = array_filter($numbers, fn($number) => $number <= 10);
print_r($newNumbers);


$newNumbers = array_reduce($numbers, fn($carry, $number) => $number + $carry);
print_r($newNumbers);
