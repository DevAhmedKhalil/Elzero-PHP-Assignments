<?php
/*
# vid ( [23] Comparison Operators Part 2 )
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 2
    - >     => Larger Than
    - >=    => Larger Than Or Equal
    - <     => Smaller Than
    - <=    => Smaller Than Or Equal
    - <=>   => Spaceship [Less Than, Equal Or Greater]

    Search
    - How Does PHP Compare Strings With Comparison Operators
  */

var_dump(100 <=> 200); // -1
echo '<br>';
var_dump(100 <=> 100); // 0
echo '<br>';
var_dump(100 <=> 50); // 1

?>


<?php
/*
# vid( [28] Error Control Operator )
    Operators
    - Used To Perform Operations On Values.

    Error Control Operator
    - Control The Errors

    @
    - Variable
    - File
    - Include
  */

// Variable
$a = 10;
$b = @$a or die("Variable Not Found");

echo "Test $b";
echo '<br>';

// File
$f = @file("osama.txt") or die("File Not Found");
echo '<pre>';
print_r($f);
echo '</pre>';
echo '<br>';

// Include
(@include("osama_elzero.php")) or die("Include File Not Found");
?>


<?php
/* 
# vid( [9] Operator Precedence )
    Operators
    - Used To Perform Operations On Values.

    Operator Precedence
    - "||" Has A Greater Precedence Than "or"
    - "&#038;&#038;" Has A Greater Precedence Than "and"
  */

$a = 10 || false; // $a = (10 || false) => $a = 1
echo $a; // 1

echo '<br>';

$b = 10 or false; // ($b = 10) or false
echo $b; // 10
?>
