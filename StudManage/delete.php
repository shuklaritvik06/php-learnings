<?php include "./config/database.php" ?>

<?php
function deletUser($id)
{
    global $connect;
    $sql = "DELETE FROM userphp WHERE id=$id";
    if (mysqli_query($connect, $sql)) {
        header("Location: /StudManage/allstudents.php");
    }
}
if (!empty($_GET["id"])) {
    deletUser($_GET["id"]);
} else {
    header("Location: /StudManage/index.php");
}
?>