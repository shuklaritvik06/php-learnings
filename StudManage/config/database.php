<?php
define("DB_USER", "root");
define("DB_HOST", "localhost");
define("DB_PASS", "ritvik");
define("DB_NAME", "users");

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($connect->connect_error) {
    echo "Database connection failed with err " . $connect->connect_error;
}
