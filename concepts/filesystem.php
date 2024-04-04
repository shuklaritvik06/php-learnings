<?php
// Name of the directory
echo __DIR__;
// The name of current file
echo __FILE__;
// Number of Lines
echo __LINE__;

mkdir("test");
rename("test", "test2");
rmdir("test2");

echo file_get_contents("./file.txt");

print_r(scandir("./uploads"));

// Write to file
file_put_contents("./file.txt", "ramesh");

// From URL

echo file_get_contents("https://www.google.com");
