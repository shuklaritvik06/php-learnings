<?php
/**
 * -------------Exceptions------------
 * 
 * 
 */

$test = function () {
    throw new Exception("Division by zero");
};
try {
    echo $test();
} catch (Exception $e) {
    echo $e;
    echo $e->getFile();
} finally {
    echo "Done";
}
?>