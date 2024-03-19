<?php

print "<br> ----- تكليفات PHP Bootcamp من الدرس 73 إلى 81 ----- <br>";
print "<br> -------------------- التكليف 01 -------------------- <br>";

echo rand(11, 19) . "<br>";
echo mt_rand(11, 19) . "<br>";
// It uses a random number generator with known characteristics using the » Mersenne Twister , which will produce random numbers four times faster than what the average libc rand() provides.



print "<br> -------------------- التكليف 02 -------------------- <br>";

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

//# way 1 
echo $friends[mt_rand(0, 3)] . "<br>";

//# way 2 
echo $friends[array_rand($friends)] . "<br>";

// Example
// Ibrahim
// Ahmed

print "<br> -------------------- التكليف 03 -------------------- <br>";

$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1, 0, PHP_ROUND_HALF_DOWN) . "<br>";
echo round($num2, 1) . "<br>";
echo round($num3, 0, PHP_ROUND_HALF_DOWN) . "<br>";


print "<br> -------------------- التكليف 04 -------------------- <br>";


foreach (filter_list() as $fl) {
  $filterId = filter_id($fl);
  $newList[$filterId] = $fl;
}

echo "<pre>";
print_r($newList);
echo "</pre>";


print "<br> -------------------- التكليف 05 -------------------- <br>";

$url1 = "http://www.elzero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

function validUrl($url)
{
  return filter_var($url, FILTER_VALIDATE_URL) ? "A Valid URL" : "Not A Valid URL";;
}

for ($i = 1; $i < 5; $i++) {
  // echo validUrl(${"url$i"}) . "<br>";
  echo validUrl(${'url' . $i}) . "<br>";
}

// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"

print "<br> -------------------- التكليف 06 -------------------- <br>";

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

function valid_Url($url)
{
  return filter_var($url, FILTER_SANITIZE_URL);
}

for ($i = 1; $i < 5; $i++) {
  echo valid_Url(${"url$i"}) . "<br>";
}

// Output
// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org


print "<br><br> -------------------- النهاية- The End -------------------- <br><br>";
