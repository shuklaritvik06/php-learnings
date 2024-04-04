<?php
//echo -> Output strings, numbers, html etc on the screen
echo 123, "Hello", "<div>Hello</div>";
// print -> Works like echo but can only take a single arguement
print 1;
// print_r() -> print single values and arrays
print_r([1,2,3,4]);
// var_dump() -> Returns more info like data type and length
var_dump("Hello");
// var_export() -> Similar to var_dump(), Output a string repr of variable
var_export("Hello");