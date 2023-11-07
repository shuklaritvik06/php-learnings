<?php
$string = "Hello World!";
echo str_contains($string, "He");
echo str_ends_with($string, "ld");
echo str_pad($string, 23, "He", STR_PAD_LEFT);
echo str_repeat($string, 2);
echo str_starts_with($string, "He");
echo str_shuffle($string);
echo str_word_count($string);
echo str_split($string, 2);
echo strlen($string);
echo strpos($string, "e");
echo strrev($string);
echo strtolower($string);
echo ucwords($string);
echo substr($string, 2);
echo htmlspecialchars("<script>alert(1)</script>");

printf("%s likes to %s", "Ritvik", "code");
