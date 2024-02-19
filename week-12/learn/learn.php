<?php

/*
    Lesson 1: Cookies Introduction and Examples

    - Examples
    --- Popup
    --- Custom Settings
    --- Remember Me => Login

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only
  */

setcookie("style", "dark", time() + 60 * 60 * 24 * 30);

?>

<?php

/*
    Lesson 2: Cookies Modification, Deletion, and Array Addition
  */

setcookie("style[color]", "red");
setcookie("style[font]", "Tahoma");
setcookie("style[layout]", "boxed");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE["style"])) {
  echo $_COOKIE["style"]["font"];
}

setcookie("style", "dark", time() + 60 * 60 * 24 * 30, "/");
setcookie("popup", "done", strtotime("+1 month"));

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo $_COOKIE["style"];

?>

<?php

/*
    Lesson 3: Cookies Practice
  */

if (isset($_COOKIE["background"])) {
  echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  setcookie("background", $_POST["bg-color"], strtotime("+1 year"));
  header("Location: " . $_SERVER["REQUEST_URI"]);
  exit();
}

?>

<form action="" method="POST">
  <input type="color" name="bg-color">
  <input type="submit" value="Choose Color">
</form>

<?php

/*
    Lesson 4: Sessions Introduction and Basic Usage
  */

session_start();

$_SESSION['name'] = "Ahmed";
$_SESSION['id'] = 1005;

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

echo '<a href="test.php">Test</a>';

?>

<?php

/*
    Lesson 5: Sessions Advanced Information and Usage
  */

session_start();

$_SESSION['name'] = "Elzero";

isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

echo "Hello " . $_SESSION['name'] . " Views Count Is " . $_SESSION['views'];

echo '<a href="about.php">About</a>';

?>

<?php

/*
    Lesson 6: Sessions Unset and Destroy, Login and Logout Simulation
  */

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if ($_POST['user'] === "Osama") {
    $_SESSION['username'] = "Elzero";
    $_SESSION['id'] = 1005;
  }
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

if (isset($_SESSION['username'])) {
  echo "Welcome " . $_SESSION['username'];
} else {

?>

  <form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" value="Login">
  </form>

<?php } ?>

<a href="logout.php">Logout</a>

<?php

/*
    Lesson 7: HTTP Headers
  */

// header("HTTP/1.0 404 Not Found");
// header("expires: Sat, 01 Jan 2022 01:00:00");
// header("cache-control: no-cache, must-revalidate");
// echo "<a href='test.php'>Test</a>";
// header("Refresh:5; url=test.php");
header("Location: test.php");
exit;

?>