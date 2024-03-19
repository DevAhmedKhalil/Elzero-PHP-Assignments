<!-- <?= '-------------------- WEEK-03 --------------------------' ?> -->

<?php
print '-------------------- التكليف 01 --------------------------';
$name = "Elzero Courses";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $name ?>">
  <title>Welcome To <?= $name ?></title>
</head>

<body>
  <h1><?= $name ?></h1>
  <p>Here In <?= $name ?> We Provide Front-End And Back-End Courses</p>
  <hr>
  <div><?= $name ?> Is The What You Need.</div>
  <footer>All Right Reserved To <?= $name ?></footer>
</body>

</html>

<?php
echo '<br> <br>';
print '-------------------- التكليف 02 --------------------------';
echo '<br> <br>';

$name = "elzero";
$$name = "Web";

echo $$name, '<br>';
echo ${$name}, '<br>';
echo ${'elzero'}, '<br>';
echo $elzero, '<br>';
echo "{$elzero}";
?>


<?php
echo '<br> <br>';
print '-------------------- التكليف 03 --------------------------';
echo '<br> <br>';

$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100
?>

<?php
echo '<br> <br>';
print '-------------------- التكليف 04 --------------------------';
echo '<br> <br>';

echo $_SERVER['DOCUMENT_ROOT']; // Document Root
echo '<br>';
echo $_SERVER['SERVER_NAME']; // Server Name
echo '<br>';
echo getenv('SystemRoot'); // Outputs: C:\WINDOWS
echo '<br>';
echo isset($_SERVER['SSL_CONF']) ? $_SERVER['SSL_CONF'] : "SSL Configuration not set";
echo '<br>';
?>

<?php
echo '<br>';
print '-------------------- التكليف 05 --------------------------';
echo '<br>';


# 10 Words Here
print 'if - else - while - for - function - class - try - catch - return';

?>

<?php
echo '<br> <br>';
print '-------------------- التكليف 06 --------------------------';
echo '<br>';

echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
?>