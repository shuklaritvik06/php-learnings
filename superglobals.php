<?php
//Built in variables that are always available in all scopes

/*
  $GLOBALS - A superglobal variable that holds information about any variables in global scope.
  $_GET - Contains information about variables passed through a URL or a form.
  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.
*/

// var_dump($GLOBALS);
// var_dump($_GET);
// var_dump($_POST);
// var_dump($_REQUEST);
// echo $_GET["name"];
// echo $_GET["age"];
if (isset($_POST["submit"])) {
  $first = htmlspecialchars($_POST["first"]);
  echo $first;
  $first2 = filter_input(INPUT_POST, "first", FILTER_SANITIZE_SPECIAL_CHARS);
  echo $first2;
}
?>

<!-- <a href="<?php echo $_SERVER["PHP_SELF"] ?>?name=Ramesh&age=10">Click</a> -->

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
  <input type="text" name="first" placeholder="First Name" />
  <input type="text" name="last" placeholder="Last Name" />
  <input type="number" name="age" placeholder="Age" />
  <input type="submit" value="Submit" name="submit">
</form>