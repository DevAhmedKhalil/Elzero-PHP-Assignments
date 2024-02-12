<?php

use function PHPSTORM_META\type;

echo '-------------------- WEEK-04 --------------------------';
print '<br> <br>';
print '-------------------- التكليف 01 --------------------------';
print '<br> <br>';

// Replace ? With Arithmetic Operators
echo (10 * 20) + (15 % 3) + (190 + 10) - 400; // 0

?>

<?php
print '<br> <br>';
print '-------------------- التكليف 02 --------------------------';
print '<br> <br>';

$a = "10";
echo $a * 1, '<br>', gettype($a * 1), '<br>'; // %1 /1 +0 -0
echo +$a, '<br>', gettype(+$a), '<br>'; // unary operator
echo (int)$a, '<br>', gettype((int)$a), '<br>'; // casting

// Needed Ouput With 5 Wways
// 10
// "integer"
?>

<?php
print '<br> <br>';
print '-------------------- التكليف 03 --------------------------';
print '<br> <br>';

$a = 10;
$b = 20;

echo $a <> $b ? -1 : "none"; // way 1
print '<br>';

echo ($a - $b) / 10; // way 2
print '<br>';

// $a = &$b; // way 3
// $a = -1;
// echo $a;

// Needed Output
// -1
?>

<?php
print '<br> <br>';
print '-------------------- التكليف 04 --------------------------';
print '<br> <br>';

$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a <= $b); // True
var_dump($a || $b); // True
var_dump($a <> $c); // True
var_dump($a !== $c); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype($a) && gettype($b)); // True
var_dump(gettype((float) $a) != gettype($b)); // True
?>

<?php
print '<br> <br>';
print '-------------------- التكليف 05 --------------------------';
print '<br> <br>';

$points = 10;

// Write Your Code Here
++$points;
++$points;
++$points;

echo $points; // 13
print '<br> <br>';

// Write Your Code Here
--$points;
--$points;
--$points;
--$points;
--$points;

echo $points; // 8;
print '<br> <br>';
?>



<?php
print '-------------------- التكليف 06 --------------------------';
print '<br> <br>';

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";

// Method Two
$d = $a . " " . $b . " " . $c;

// Method Three
$d = <<<"EWS"
$a $b $c
EWS;

// Method Four
$d = <<<EWS
$a $b $c
EWS;

echo $d; // Elzero Web School

// Method Five
$z = "Elzero";
$z .= " Web ";
$z .= "School";

print "<br> ################ <br>";
echo $z; // Elzero Web School
?>



<?php
print '<br> <br>';
print '-------------------- التكليف 07 --------------------------';
print '<br> <br>';

$a = 10;
$b = 20;

//      10   20     10   20     10   10    10
echo ((($a + $b) * ($a + $b)) + $a * $a) * $a; // 10000
?>


<?php
print '<br> <br>';
print '-------------------- التكليف 08 --------------------------';
print '<br> <br>';

// // Code 1
$a = @$b or die("Variable Not Found");

// // Code 2
$f = @file("Not_A_File") or die("File Not Found :(");

// // Code 3
@(include("Not_A_File")) or die("Included File Not Found!");
?>