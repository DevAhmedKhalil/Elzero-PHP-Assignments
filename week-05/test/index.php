<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  echo $_POST["username"];
  print '<br>';
  echo $_POST["lang"];
  print '<br>';

  if ($_POST['lang'] === "ar") {
    header("Location: ar.php"); // ReDirect to ar.php
    exit();
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Support</title>
</head>

<body>
  <form action="" method='POST'>
    <input type="text" name="username">
    <select name="lang" id="">
      <option value="ar">Arabic</option>
      <option value="en">English</option>
      <option value="sp">Spanish</option>
    </select>
    <input type="submit" value="Go">
  </form>
</body>

</html>


<?php
if (10 > 10) :
  echo "First";
elseif (10 > 10) :
  echo "Second";
else :
  echo "Third come from else";
endif;
?>


<?php
print '<br> <br>';

$i = 0;
while ($i <= 3) :
  echo $i, '<br>';
  $i++;
endwhile;


$a = 0;
do {
  echo $a, '<br>';
  $a++;
} while ($a <= 3);


for ($i = 0; $i <= 3; $i++) :
  echo $i, '<br>';
endfor;

$countries = ["EG" => 50, "PA" => 60, "QA" => 10, "SY" => 40];

echo '<pre>';
print_r($countries);
echo '</pre>';

foreach ($countries as $country => $dicsount) :

  echo "Country name is $country and discount is $dicsount <br>";

endforeach;


// require("test.php"); // fatal error and break
// include("test.php"); // continue to other content

// include_once(); // check if you include this file before
// require_once(); //  check if you require this file before
?>