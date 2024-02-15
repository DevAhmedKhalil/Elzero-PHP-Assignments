<?php

print "<br> ----- تكليفات PHP Bootcamp من الدرس 63 إلى 72 ----- <br>";
print "<br> -------------------- التكليف 01 -------------------- <br>";


$friends = [
  "AG" => "Ahmed Gamal",
  "OM" => "Osama Mohamed",
  "MG" => "Mahmoud Gamal",
  "AS" => "Ahmed Samy",
  "FA" => "Farid Ahmed",
  "SM" => "Sayed Mohamed"
];

$chunkedFriends = array_chunk(array_change_key_case($friends, CASE_LOWER), 2, true);

echo "<pre>";
print_r($chunkedFriends);
echo "</pre>";

// Output
// Array
// (
//   [0] => Array
//     (
//       [ag] => Ahmed Gamal
//       [om] => Osama Mohamed
//     )
//   [1] => Array
//     (
//       [mg] => Mahmoud Gamal
//       [as] => Ahmed Samy
//     )
//   [2] => Array
//     (
//       [fa] => Farid Ahmed
//       [sm] => Sayed Mohamed
//     )
// )

print "<br> -------------------- التكليف 02 -------------------- <br>";

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

$combinedArray = array_change_key_case(array_combine($codes, $means), CASE_LOWER);

echo "<pre>";
print_r($combinedArray);
echo "</pre>";

// Output
// Array
// (
//   [h] => HTML
//   [c] => CSS
//   [j] => JavaScript
// )


print "<br> -------------------- التكليف 03 -------------------- <br>";

$friends = [
  "Ahmed Gamal" => "AG",
  "Osama Mohamed" => "OM",
  "Mahmoud Gamal" => "MG",
  "Ahmed Samy" => "AS"
];

echo "<pre>";
print_r(array_change_key_case(array_flip($friends), CASE_LOWER));
echo "</pre>";

// Output
// Array
// (
//   [as] => Ahmed Samy
//   [mg] => Mahmoud Gamal
//   [om] => Osama Mohamed
//   [ag] => Ahmed Gamal
// )

print "<br> -------------------- التكليف 04 -------------------- <br>";

$nums = [10, 20, 30];

// $sum = 0;
// foreach ($nums as $num) :
//   $sum += $num;
// endforeach;
// echo $sum; // 60

// # Way 2: array_reduce();
// echo array_reduce($nums, fn ($carry, $item) => $carry + $item) . "<br>"; // 60
echo array_reduce($nums, fn ($carry, $item) => $carry + $item, 0) . "<br>"; // 60

// Output
// 60
// 60

print "<br> -------------------- التكليف 05 -------------------- <br>";

$nums = [5, 10, 20, 5, 30, 40];

// $sum = 0;
// for ($i = 0; $i < count($nums); $i++) {
//   if ($nums[$i] === 5) continue;
//   $sum += $nums[$i];
// }
// echo $sum . "<br>";

// # Way 2: 
$filteredNums = array_filter($nums, fn ($num) => $num !== 5);

echo array_sum($filteredNums) . "<br>";

// Output
// 100



print "<br> -------------------- التكليف 06 -------------------- <br>";


$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

$result = array_merge($chars, array_fill(count($chars), count($chars), $char[$zero]));

echo '<pre>';
print_r($result);
echo '</pre>';

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
//   [4] => E
//   [5] => @
//   [6] => @
//   [7] => @
//   [8] => @
//   [9] => @
// )


print "<br> -------------------- التكليف 07 -------------------- <br>";


$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
next($names);
// Write Line Here
next($names);

echo current($names) . "<br>"; // "Sayed"

// Write Line Here
end($names);

echo current($names) . "<br>"; // "Ali"

// Write Line Here
reset($names);

echo current($names) . "<br>"; // "Osama"

// Write Line Here
end($names);
// Write Line Here
prev($names);

echo current($names) . "<br>"; // "Mahmoud"


print "<br> -------------------- التكليف 08 -------------------- <br>";

$chars = ["A", "B", "C"];

//# way 1:
// $chars[3] = 'D';
// echo '<pre>';
// print_r($chars);
// echo '</pre>';

//# way 2:
// $chars[] = 'D';
// echo '<pre>';
// print_r($chars);
// echo '</pre>';

//# way 3:
// array_push($chars, 'D');
// echo '<pre>';
// print_r($chars);
// echo '</pre>';

//# way 4:
// array_merge($chars, ['D']);
// echo '<pre>';
// print_r(array_merge($chars, ['D']));
// echo '</pre>';

//# way 5:
array_splice($chars, count($chars), 0, "D");
echo '<pre>';
print_r($chars);
echo '</pre>';

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )


print "<br> -------------------- التكليف 09 -------------------- <br>";

$nums = [1, 2, 3, 4, 5, 6];

$result = array_slice($nums, -5, -2);

echo "<pre>";
print_r($result);
echo "</pre>";

// Output
// Array
// (
//   [0] => 2
//   [1] => 3
//   [2] => 4
// )


print "<br> --------------------*** التكليف 10 ***-------------------- <br>";


$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here

$cut_string_from_mix = array_splice($mix, count($nums), count($nums), $nums);

echo "<pre>";
print_r($mix);
// print_r($cut_string_from_mix); 
echo "</pre>";

// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )


print "<br> -------------------- التكليف 11 -------------------- <br>";


$arr = ["A", "B", "C", "D", "E"];

$counter = 0;
foreach ($arr as $ar) :
  $counter++;
endforeach;

echo $counter . "<br>";

// Output
// 5


print "<br> -------------------- التكليف 12 -------------------- <br>";


$nums = [11, 2, 10, 7, 20, 50];

$sum = 0;
foreach ($nums as $num) :
  $sum += $num;
endforeach;

echo $sum . "<br>";

// Output
// 100


print "<br> -------------------- التكليف 13 -------------------- <br>";


$nums = [10, 100, -20, 50, 30];

//# way 1: for loop
// $large = $nums[0];
// for ($i = 0; $i < count($nums); $i++) :
//   if ($nums[$i] > $large) :
//     $large = $nums[$i];
//   endif;
// endfor;

// echo $large . "<br>";

//# way 2: foreach loop
$maxNum = null;
foreach ($nums as $num) :
  if ($maxNum === null || $maxNum < $num) {
    $maxNum = $num;
  }
endforeach;

echo $maxNum . "<br>";

// Output
// 100


print "<br> -------------------- التكليف 14 -------------------- <br>";

$nums = [10, 100, -20, 50, 30];

//# way 1: for loop
$small = $nums[0];
for ($i = 0; $i < count($nums); $i++) :
  if ($nums[$i] < $small) :
    $small = $nums[$i];
  endif;
endfor;

echo $small . "<br>";

//# way 2: foreach loop
// $minNum = null;
// foreach ($nums as $num) :
//   if ($minNum === null || $minNum > $num) {
//     $minNum = $num;
//   }
// endforeach;

// echo $minNum . "<br>";

// Output
// -20


print "<br> -------------------- التكليف 15 -------------------- <br>";


$chars = ["o", "r", "e", "z", "l", "E"];

//# way 1: for loop
// for ($i = count($chars) - 1; $i >= 0; $i--) {
//   echo  $chars[$i];
// }

//# way 2: foreach loop
$result = "";
foreach ($chars as $char) {
  // $result = $result . $char; // orezlE
  $result = $char . $result; // Elzero
}
echo $result . "<br>";

// Output
// "Elzero"


print "<br> -------------------- التكليف 16 -------------------- <br>";


$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];

//# way 1: without bult in funcitons
// $mix_filter = [];
// foreach ($mix as $m) :
//   if (is_int($m) and $m % 2 !== 0) {
//     // array_push($mix_filter, $m);
//     $mix_filter[] = $m;
//   }
// endforeach;

// echo "<pre>";
// print_r($mix_filter);
// echo "</pre>";

//# way 2: with bult in funcitons
$filtered = array_filter($mix, function ($val) {
  return (is_numeric($val) && $val % 2 !== 0);
});
// sort($filtered); // it sort the array and give it index from 0 to ---
$filtered = array_values($filtered); // is used to re-index the elements of the array 

echo "<pre>";
print_r($filtered);
echo "</pre>";

// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )


print "<br> -------------------- التكليف 17 -------------------- <br>";


$nums = [1, 2, 3, 4, 5, 6];

// Output
// Every Time The Array Elements Will Be Shuffled

//# Shuffle function without using shuffle()
for ($i = 0; $i < count($nums) - 1; $i++) {
  // Generating a random "index"
  $j = rand(0, $i);
  // Swapping elements
  $temp = $nums[$i];
  $nums[$i] = $nums[$j];
  $nums[$j] = $temp;
}

echo "<pre>";
print_r($nums);
echo "</pre>";

// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )


print "<br> -------------------- التكليف 18 -------------------- <br>";


$title = "E&z\$r0 W\$b Sch00&";

$title = str_replace(["&", "$", "0"], ["l", "e", "o"], $title, $counter);

echo $title . '<br>';
echo $counter . '<br>';

// Output
// "Elzero Web School"
// 7

print "<br>-------------------- النهاية- The End --------------------<br>";
