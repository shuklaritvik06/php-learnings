<?php
$file = "file.txt";
if (file_exists($file)) {
    $handle = fopen($file, "r");
    $content = fread($handle, filesize($file));
    echo $content;
    echo readfile($file);
    fclose($handle);
    $handle = fopen($file, "a");
    fwrite($handle, "Hello World");
    fclose($handle);
} else {
    echo "File does not exist";
}
?>