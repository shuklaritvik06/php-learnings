<?php
if (isset($_POST["submit"])) {
    $allowed_files = array("png", "jpg");
    if (!empty($_FILES["file"])) {
        $message = "Thank you!";
        $file_size = $_FILES["file"]["size"];
        $file_name = $_FILES["file"]["name"];
        $file_tmp = $_FILES["file"]["tmp_name"];
        $target_dir = "uploads/" . $file_name;
        $file_ext = explode(".", $file_name);
        $file_ext = strtolower(end($file_ext));
        if (in_array($file_ext, $allowed_files)) {
            move_uploaded_file($file_tmp, $target_dir);
        } else {
            $message = "<p>Error: Type not allowed!</p>";
        }
    } else {
        $message = "<p>Error: Please give file</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" value="Upload" name="submit" />
    </form>

    <?php echo $message ?? null; ?>
</body>

</html>