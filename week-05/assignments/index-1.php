<?php

print "<br> ----- تكليفات PHP Bootcamp من الدرس 30 إلى 36 ----- <br>";
print "<br> -------------------- التكليف 01 -------------------- <br>";

$a = 100;
$b = 200;
$c = 100;

if ($b > $a && $a === $c && ($a + $c) === $b) :
  echo "Yes <br>";
endif;

/*
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/
// "Yes"

print "<br> -------------------- التكليف 02 -------------------- <br>";

// Test Case 1
$a = 100;
$b = 200;
$c = 300;

// A Is Not Larger Than B Or C
if ($a < $b and $a < $c) :
  echo "A Is Not Larger Than B Or C <br>";
endif;


// Test Case 2
$a = 200;
$b = 100;
$c = 300;

// A Is Larger Than B
if ($a > $b) {
  echo "A Is Larger Than B <br>";
}


// Test Case 3
$a = 200;
$b = 200;
$c = 100;

// A Is Larger Than c
if ($a > $c) {
  echo "A Is Larger Than c <br>";
}
?>

<?php
print "<br> -------------------- التكليف 03 -------------------- <br>";


$admins = ["Osama", "Ahmed", "Sayed"];

// Input Name "Osama"
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["user"]) {
  $input_username = $_POST["user"];
  $isAdmin = false;

  foreach ($admins as $admin) {
    if ($input_username === $admin) {
      $isAdmin = true;
      break;
    }
  }

  if ($isAdmin) {
    echo "The Request Method Is {$_SERVER["REQUEST_METHOD"]} And Username Is $input_username <br>";
    echo "This Username $input_username Is Admin";
  } else {
    echo "This Username $input_username Is Not Admin";
  }
}

// if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["user"])) {
//   $input_username = $_POST["user"];
//   if (in_array($input_username, $admins)) {
//     echo "The Request Method Is {$_SERVER["REQUEST_METHOD"]} And Username Is $input_username <br>";
//     echo "This Username $input_username Is Admin";
//   } else {
//     echo "This Username $input_username Is Not Admin";
//   }
// }

// Needed Output
// "The Request Method Is Post And Username Is Osama"
// "This Username Osama Is Admin"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>

<body>
</body>

</html>

<!-- ************************************************************** -->

<?php
print "<br> -------------------- التكليف 04 -------------------- <br>";

$a = 30;
$b = 20;
$c = 10;

echo ($a + $b === $c) ? "A + B = C" : (($a + $c === $b) ? "A + C = B" : (($b + $c === $a) ? "B + C = A" : "The End"));

print "<br><br>";

if ($a + $b === $c) {
  echo "A + B = C";
} elseif ($a + $c === $b) {
  echo "A + C = B";
} elseif ($b + $c === $a) {
  echo "B + C = A";
} else {
  echo "The End";
}

// Output
// "B + C = A"

print "<br> -------------------- التكليف 05 -------------------- <br>";

$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18 && gettype($name) === "string" && $country === "Egypt") echo "The Age Is Good To Go<br>The Name Is Good To Go<br>The Country Is Good To Go<br>";

print "<br><br>";

if ($age > 18) {
  echo "The Age Is Good To Go<br>";
  if (gettype($name) === "string") {
    echo "The Name Is Good To Go<br>";
    if ($country === "Egypt") {
      echo "The Country Is Good To Go<br>";
    }
  }
}

// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"

print "<br> -------------------- التكليف 06 -------------------- <br>";

$genre = "Hack And Slash";

if ($genre === "RPG") {
  echo "I Recommend Ys Games";
} elseif ($genre === "Hack And Slash") {
  echo "I Recommend Castlevania Games";
} elseif ($genre === "FPS") {
  echo "I Recommend Uncharted Games";
} elseif ($genre === "Platform") {
  echo "I Recommend Megaman Games";
} elseif ($genre === "Puzzle") {
  echo "I Recommend Megaman Games";
} else {
  echo "I Recommend Shadow Of Mordor And Shadow Of War";
}

print "<br><br>";

switch ($genre):
  case "RPG":
    echo "I Recommend Ys Games";
    break;
  case "Hack And Slash":
    echo "I Recommend Castlevania Games";
    break;
  case "FPS":
    echo "I Recommend Uncharted Games";
    break;
  case "Platform":
    echo "I Recommend Megaman Games";
    break;
  default:
    echo "I Recommend Shadow Of Montrealor And Shadow Of War";
endswitch;

// Needed Output
// "I Recommend Castlevania Games"

print "<br> -------------------- التكليف 07 -------------------- <br>";

$num_one = 23;
$num_two = 5;
$op = "/";

switch ($op) {
  case "+":
    echo $num_one + $num_two;
    break;
  case "-":
    echo $num_one - $num_two;
    break;
  case "/":
    echo (int)($num_one / $num_two) . "<br>" . $num_one % $num_two;
    break;
  case "*":
    echo $num_one * $num_two;
    break;
  default:
    echo "Unknown Operation";
    break;
}

print "<br> -------------------- التكليف 08 -------------------- <br>";

$day = "Sat";

if ($day == "Sat" || $day == "Sun" || $day == "Mon") {
  echo "We Are Open All The Day";
} elseif ($day == "Tue" || $day == "Wed") {
  echo "We Are Open From 08:12";
} elseif ($day == "Thu" || $day == "Fri") {
  echo "We Are Closed";
} else {
  echo "Unknown Day";
}

print "<br><br> -------------------- النهاية- The End -------------------- <br><br>";
