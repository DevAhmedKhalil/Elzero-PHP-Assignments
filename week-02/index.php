<!-- <?= '-------------------- WEEK-02 --------------------------' ?> -->
<?php
print '-------------------- التكليف 01 --------------------------';
print '<br>';
?>

<?php
echo (int)15.2 + (int)14.7 + (int)(10.5 + 10.5); // 50
echo '<br>';
echo gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer
print '<br>';
?>

<?php
print '-------------------- التكليف 02 --------------------------';
print '<br>';
?>

<?php
$num = 100;
echo gettype($num); // Output: integer
echo '<br>';
echo $num === (int)$num ? 'int' : "not int"; // Output: int
echo '<br>';
var_dump($num);
echo '<br>';
echo intdiv($num, 1) === $num ? 'int' : "not int"; // Output: int
echo '<br>';
?>

<?php
print '-------------------- التكليف 03 --------------------------';
print '<br>';
?>

<?php
print '<br>';
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";
print '<br>';
echo 'Hello "Elzero" \\\\ """ We Love "$$PHP"';
print '<br>';

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
?>

<?php
print '<br>';
print '-------------------- التكليف 04 --------------------------';
print '<br>';
?>

<?php
echo nl2br("We \n Love \n Elzero \n Web \n School");
print '<br>';

// Needed Output
/* 
We
Love
Elzero
Web
School
*/
?>

<?php
print '-------------------- التكليف 05 --------------------------';
print '<br> <br>';
?>

<?php
$str = <<<'HeroDoc'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
HeroDoc;

echo nl2br($str);

// Needed Output
/*
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
*/
?>

<?php
print '<br> <br>';
print '-------------------- التكليف 06 --------------------------';
print '<br> <br>';
?>

<?php
$something = "Programming";

echo <<< code
Hello \PHP\
We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming
?>

<?php
print '<br> <br>';
print '-------------------- التكليف 07 --------------------------';
print '<br> <br>';
?>

<?php
echo "Hello PHP" === '----' ? "not" : 1;
echo '<br>';
echo is_string("Hello PHP") ? "integer" : "string";

// Needed Output
// 1
// integer
?>

<?php
print '<br> <br>';
print '-------------------- التكليف 08 --------------------------';
print '<br> <br>';
?>

<?php
echo '<br> <br>';
$my_arr = array(
  '[FrontEnd]' => array('HTML', 'CSS', 'JS' => array('Vuejs' => array('2' => 'v2', '3' => 'v3'), '0' => 'Reactjs', 'Svelte')),
  '[Backend]' => ['PHP', 'MySQL', 'Security'],
  '0' => 'Git', 'Github', 'Testing' => ['Unit Testing', 'End To End', 'integrating']
);

echo "<pre>";
print_r($my_arr);
echo "</pre>";
?>