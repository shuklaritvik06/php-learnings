<?php include "./config/database.php" ?>

<?php
$sql = "SELECT * FROM userphp";
$result = mysqli_query($connect, $sql);
$results = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Students</title>
</head>

<body>
    <div style="display: flex;gap: 10px;align-items: center;">
        <?php foreach ($results as $result) {
            echo "<p>" . $result['id'] . "</p>";
            echo "<p>" . $result['firstname'] . "</p>";
            echo "<p>" . $result['lastname'] . "</p>";
            echo "<a href='/StudManage/delete.php?id={$result['id']}'>Delete</a>";
        } ?>
    </div>
</body>

</html>