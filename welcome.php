<?php
session_start();
if (isset($_SESSION["username"])) {
    echo "Welcome " . $_SESSION["username"];
    echo "<a href='/Basics/Logout.php'>Logout</a>";
} else {
    header("Location: /Basics/sessions.php");
}
?>