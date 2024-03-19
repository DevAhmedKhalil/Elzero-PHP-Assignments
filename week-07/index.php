<?php

print "<br> ----- تكليفات PHP Bootcamp من الدرس 53 إلى 62 ----- <br>";
print "<br> -------------------- التكليف 01 -------------------- <br>";

$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

// Write Your Code Here
$str = str_replace(["%", "0"], [$let_two, $let_one], $str);

echo $str; // Elzero

print "<br> -------------------- التكليف 02 -------------------- <br>";

$str = "Orezle";

echo ucfirst(strtolower(strrev($str)));

// Elzero

print "<br> -------------------- التكليف 03 -------------------- <br>";

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here

echo chunk_split(str_repeat(strtolower($str), 3), 3, "_") . '<br>';

// aaa_aaa_aaa_

print "<br> -------------------- التكليف 04 -------------------- <br>";

$str = "<div><b>Elzero</b></div>";

echo strip_tags($str, '<b>');

// <b>Elzero</b>

print "<br> -------------------- التكليف 05 -------------------- <br>";

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e, $four);
print "<br>";
echo substr_count($str, $e);

// 1
// 2

print "<br> -------------------- التكليف 06 -------------------- <br>";

$chars = ["E", "l", "z", "e", "r", "o"];

// echo implode($chars) . "<br>";
echo join($chars);

// Output
// "Elzero"


print "<br> -------------------- التكليف 07 -------------------- <br>";


$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

// $word = "";
// foreach ($chars as $char) :
//   if (is_int($char)) continue;
//   $word .= strtolower($char);
// endforeach;
// echo ucfirst($word). "<br>";

$text = implode($chars); //E12lzERo
$text_without_num = str_replace(['1', '2'], "", $text); // ElzERo
echo ucfirst(strtolower($text_without_num)) . "<br>";

// Output
// "Elzero"

print "<br> -------------------- The End - النهاية -------------------- <br>";
