<?php

print "<br> ----- تكليفات PHP Bootcamp من الدرس 43 إلى 52 ----- <br>";
print "<br> -------------------- التكليف 01 -------------------- <br>";

// function greeting($name, $gender = "")
// {
//   if ($gender == 'Male') {
//     echo "Hello Mr $name";
//   } elseif ($gender == 'Female') {
//     echo "Hello Miss $name";
//   } else {
//     echo "Hello $name";
//   }
// }

//# Way 2 ---------------------------
function greeting($name, $gender = null)
{
  $title = ($gender === "Male") ? "Mr" : (($gender === "Female") ? "Miss" : "");
  return "Hello " . ($title ? "$title " : "") . $name;
}


// Needed Output
print "<br>";
echo greeting("Osama", "Male"); // Hello Mr Osama
print "<br>";
echo greeting("Eman", "Female"); // Hello Miss Eman
print "<br>";
echo greeting("Sameh"); // Hello Sameh
print "<br>";

print "<br> -------------------- التكليف 02 -------------------- <br>";


// function get_arguments(...$words)
// {
//   $all = '';
//   foreach ($words as $word) :
//     $all .=  $word . ' ';
//   endforeach;

//   return $all;
// }

//# Way 2 ---------------------------

function get_arguments(...$words)
{
  $all = implode(" ", $words);
  return $all;
}

// Needed Output
print "<br>";
echo get_arguments("Hello", "Elzero", "Web", "School") . "<br>"; // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP" . "<br>"); // I Love PHP

print "<br> -------------------- التكليف 03 -------------------- <br>";

function sum_all(...$nums)
{
  $total = 0;
  foreach ($nums as $num) :
    if ($num === 5) continue;
    elseif ($num === 10) $num = 20;
    $total += $num;
  endforeach;

  echo "Total = " . $total;
}

// Needed Output
print "<br>";
echo sum_all(10, 12, 5, 6, 6, 10) . '<br>'; // 64
echo sum_all(5, 10, 5, 10) . '<br>'; // 40


print "<br> -------------------- التكليف 04 -------------------- <br>";


function multiply(...$nums)
{
  $result = 1;
  foreach ($nums as $num) :
    if (is_string($num)) continue;
    elseif (is_float($num)) $num = (int)$num;
    $result *= $num;
  endforeach;

  return $result;
}

// Needed Output
echo multiply(10, 20) . '<br>';          // 200
echo multiply("A", 10, 30) . '<br>';     // 300
echo multiply(100.5, 10, "B") . '<br>';  // 1000


print "<br> -------------------- التكليف 05 -------------------- <br>";


function check_status($a, $b, $c)
{
  $name = is_string($a) ? $a : (is_string($b) ? $b : $c);
  $age = is_int($a) ? $a : (is_int($b) ? $b : $c);
  $available = is_bool($a) ? $a : (is_bool($b) ? $b : $c);

  $hire = $available ? "You Are Available For Hire" : "You Are Not Available For Hire";

  return "Hello $name, Your Age Is $age, $hire";
}


echo check_status("Osama", 38, true) . "<br>";  // Output: Hello Osama, Your Age Is 38, You Are Available For Hire
echo check_status(38, "Osama", true) . "<br>";  // Output: Hello Osama, Your Age Is 38, You Are Available For Hire
echo check_status(true, 38, "Osama")  . "<br>"; // Output: Hello Osama, Your Age Is 38, You Are Available For Hire
echo check_status(false, "Osama", 38) . "<br>"; // Output: Hello Osama, Your Age Is 38, You Are Not Available For Hire


print "<br> -------------------- التكليف 06 -------------------- <br>";

function calculate($num1, $num2, $operation = "add")
{
  $result = 0;
  // $operation[0] -> The [0] is used to access the first character of the $operation string
  switch ($operation[0]) {
    case 'a':
      $result = $num1 + $num2;
      break;
    case 's':
      $result = $num1 - $num2;
      break;
    case 'm':
      $result = $num1 * $num2;
      break;
    default:
      echo "Unknown Operation";
      break;
  }
  return $result;
}


echo calculate(10, 20)  . "<br>";     // Output: 30
echo calculate(10, 20, "a") . "<br>"; // Output: 30
echo calculate(10, 20, "s") . "<br>"; // Output: -10
echo calculate(10, 20, "subtract") . "<br>"; // Output: -10
echo calculate(10, 20, "multiply") . "<br>"; // Output: 200
echo calculate(10, 20, "m") . "<br>"; // Output: 200


print "<br> -------------------- التكليف 07 -------------------- <br>";

function calculatee(int $num_one, int $num_two): float
{
  return $num_one + $num_two;
}

echo calculatee(20, 10); // 30
print "<br>";
echo gettype(calculatee(20, 10)); // Double


print "<br> -------------------- التكليف 08 -------------------- <br>";

$message = "Hello";

// $Hello = function ($name) use ($message) {
//   return $message . " " . $name;
// };

//# --- Way 2 with arrow function ---
$Hello = fn ($name) => $name . " " . $message;

echo $Hello("Osama"); // Hello Osama


print "<br><br> -------------------- التكليف 09 -------------------- <br>";

$greet = function ($name) {
  return "Hello $name";
};

//# --- Way 2 with arrow function ---
$greet = fn ($name) => "Hi, $name";

// Needed Output
echo $greet("Osama"); // Greetings => Hello Osama

print "<br><br> -------------------- النهاية - The End -------------------- <br>";
