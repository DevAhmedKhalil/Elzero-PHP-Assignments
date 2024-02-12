<?php

print "<br> ----- تكليفات PHP Bootcamp من الدرس 37 إلى 42 ----- <br>";
print "<br> -------------------- التكليف 01 -------------------- <br>";

$index = 10;

while ($index > 0) :

  echo $index, '<br>';
  $index--;

endwhile;

/* 
  Needed Output
  10
  9
  8
  7
  6
  5
  4
  3
  2
  1
*/

print "<br> -------------------- التكليف 02 -------------------- <br>";

$index = 0;

for (; $index <= 20; $index += 2) :
  if ($index == 0) continue;
  echo $index, '<br>';
endfor;

// do {
//   if ($index == 0) $index += 2;
//   echo $index, '<br>';
//   $index += 2;
// } while ($index <= 20);

// while ($index <= 20) :
//   if ($index === 0) {
//     $index += 2;
//     continue;
//   }
//   echo $index, '<br>';
//   $index += 2;
// endwhile;


/* 
  Needed Output
  2
  4
  6
  8
  10
  12
  14
  16
  18
  20
*/

print "<br> -------------------- التكليف 03 -------------------- <br>";

$num = 2;
while ($num < 520) {
  // Your Code Here
  echo $num - 1, '<br>';
  $num = $num * 2 + 1;
}

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382

print "<br> -------------------- التكليف 04 -------------------- <br>";

$start = 10;
$end = 0;
$stop = 3;

for ($i = $start; $i > $end; $i--) :
  if ($i < $start) echo 0;
  echo $i, '<br>';
  if ($i === $stop) break;
endfor;

print "<br> --- [ using str_pad() ] --- <br>";

for ($i = $start; $i >= $end; $i--) {
  if ($i == $stop) {
    echo str_pad($i, 2, '0', STR_PAD_LEFT) . '<br>';
    break;
  } else {
    echo str_pad($i, 2, '0', STR_PAD_LEFT) . '<br>';
  }
}

/*
  Needed Output
  10
  09
  08
  07
  06
  05
  04
  03
*/

print "<br> --------------------*** التكليف 05 ***-------------------- <br>";

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($i = $start; $i < count($mix); $i++) :

  if (is_int($mix[$i])) :
    if ($i == $start) continue;
    echo $mix[$i], '<br>';
  endif;

endfor;

// Output
// 2
// 3
// 4

print "<br> -------------------- التكليف 06 -------------------- <br>";
print "<br>";

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

foreach ($money as $key => $value) :

  echo "\"The Name Is $key And I Need $value Pound From Him\"" . '<br>';

endforeach;

// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"

print "<br> -------------------- التكليف 07 -------------------- <br>";

$mix = [1, 2, "A", "B", "C", 3, 4];

$intCounter = 0;
$stringCounter = 0;

for ($i = 0; $i < count($mix); $i++) :
  // echo $mix[$i], '<br>';

  if (is_int($mix[$i])) {
    $intCounter++;
    echo $mix[$i] . '<br>';
  } else {
    $stringCounter++;
  }
endfor;

echo "$intCounter Numbers Printed <br>";
echo "$stringCounter Letters Ignored <br>";

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"

print "<br> -------------------- التكليف 08 -------------------- <br>";

$nums = [1, 13, 12, 20, 51, 17, 30];

foreach ($nums as $num) :
  if ($num % 2 == 0) :

    echo $num / 2 . "<br>";

  endif;
endforeach;

// for ($i = 0; $i < count($nums); $i++) :
//   if ($nums[$i] % 2 == 0) :
//     echo $nums[$i] / 2, '<br>';
//   endif;
// endfor;

// Output
// 6
// 10
// 15

print "<br> -------------------- التكليف 09 -------------------- <br>";

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for ($i = 1; $i < $help_num; $i++) :
  echo $names[$i], '<br>';
endfor;

// Output
// "Sayed"
// "Osama"

print "<br> --------------------*** التكليف 10 ***-------------------- <br>";

$help_num = 4;
$nums = [2, 4, 5, 6, 10];
// $length = count($nums); // = ($help_num + 1)

foreach ($nums as $index => $num) {
  // Get The Opposite index 0-4, 1-3, 2-2, 3-1, 4-0
  $oppositeIndex = ($help_num + 1) - $index - 1;

  // Print The Output
  echo "\" $num + {$nums[$oppositeIndex]} = " . $num + $nums[$oppositeIndex] . "<br>";
}

// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"

print "<br><br> -------------------- النهاية- The End -------------------- <br><br>";
