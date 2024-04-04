<?php include "./config/database.php" ?>
<?php
if (isset($_POST["submit"])) {
    $first = htmlspecialchars($_POST["first"]);
    $last = htmlspecialchars($_POST["last"]);
    $sql = "INSERT INTO userphp (firstname, lastname) VALUES ('$first', '$last')";
    $error = null;
    if (mysqli_query($connect, $sql)) {
        header("Location: /StudManage/allstudents.php");
    } else {
        $error = "<p>Something got wrong!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students CRUD</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="text" name="first" />
        <input type="text" name="last" />
        <input type="submit" value="Add" name="submit">
    </form>
    <?php echo $error ?? null ?>
</body>

</html>