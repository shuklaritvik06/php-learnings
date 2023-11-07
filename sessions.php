<?php

/**
 * Sessions are a way to store information (in variables) to be used across multiple pages. 
 */

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "ramesh" && $_POST["password"] == "1234") {
        session_start();
        $_SESSION["username"] = $_POST["username"];
        header("Location: /Basics/welcome.php");
    } else {
        echo "Invalid username or password.";
    }
}
?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    <input type="text" name="username" />
    <input type="password" name="password" id="">
    <input type="submit" value="Login" name="submit">
</form>