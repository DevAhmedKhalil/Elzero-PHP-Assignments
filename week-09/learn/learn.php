<?php
// ##############################################################################
print "----- Math Functions: -----" . "<br>";

echo abs(10) . "<br>"; // 10
echo abs(0) . "<br>"; // 0
echo abs(-20) . "<br>"; // 20

echo rand() . "<br>"; // random number generator
echo mt_getrandmax() . "<br>"; // max random number generator
echo rand(50, 60) . "<br>"; // random from 50 to 60

echo 10 / 5 . "<br>"; // 2
echo gettype(10 / 5) . "<br>"; // integer

echo 11 / 5 . "<br>"; // 2.2
echo gettype(11 / 5) . "<br>"; // double

echo intdiv(11, 5) . "<br>"; // 2
echo gettype(intdiv(11, 5)) . "<br>"; // integer

echo 11.5 % 5 . "<br>"; // 1 
echo gettype(11 % 5) . "<br>"; // integer

echo fmod(11.5, 5) . "<br>"; // 1.5
echo gettype(fmod(11.5, 5)) . "<br>"; // double

// ##############################################################################
print "--------------------------------------------------------------" . "<br>";
print "----- ceil, floor: -----" . "<br>";

echo ceil(5.11) . "<br>"; // 6
echo ceil(-5.99) . "<br>"; // -5

echo floor(5.99) . "<br>"; // 5
echo floor(-5.99) . "<br>"; // -6

// ##############################################################################
print "--------------------------------------------------------------" . "<br>";
print "----- round: ----- " . "<br>";

echo round(5.99) . "<br>"; // 6
echo round(5.50) . "<br>"; // 6
echo round(5.49) . "<br>"; // 5
echo round(5.10) . "<br>"; // 5

echo round(5.99, 1) . "<br>";  // 5.9, 0.9  => 6
echo round(5.94, 1) . "<br>";  // 5.9, 0.4  => 5.9
echo round(5.995, 2) . "<br>"; // 5.99, 0.5 => 6 
echo round(5.994, 1) . "<br>"; // 5.9, 0.94 =>  6
echo round(5.994, 2) . "<br>"; // 5.99, 0.4 => 5.99

// Half working on 0.50 = 1/2
echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";   // 6
echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";   // 5 

echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>"; // 5

echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>"; // 6
echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>"; // 4

echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>";  // 5
echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";  // 5

// ##############################################################################
print "--------------------------------------------------------------" . "<br>";
print "----- sqrt, min, max: ----- " . "<br>";

echo sqrt(16) . "<br>";  // 4
echo sqrt(25) . "<br>";  // 5
echo sqrt(100) . "<br>"; // 10

echo min(10, 20, -40, -30, 50) . "<br>";  // -40
echo min([10, 20, -40, -30, 50]) . "<br>"; // -40

echo "<pre>";
print_r(min([1, 3, 5], [1, 2, 6])); // [1, 2, 6]
echo "</pre>";

echo max(10, 20, -40, -30, 50) . "<br>";  // 50
echo max([10, 20, -40, -30, 50]) . "<br>"; // 50

echo "<pre>";
print_r(max([1, 3, 5], [1, 2, 6])); // [1, 3, 5]
echo "</pre>";

// ##############################################################################
print "--------------------------------------------------------------" . "<br>";
print "----- filter_list, filter_id, filter_var: ----- " . "<br>";

echo "<pre>";
print_r(filter_list());
echo "</pre>";

echo filter_id("boolean") . "<br>"; // 258

$val = "ON"; // on || true || 
if (filter_var($val, FILTER_VALIDATE_BOOL)) {
  echo "This Is True";
} else {
  echo "This Is False";
}

print "<br>";
// ##############################################################################
print "--------------------------------------------------------------" . "<br>";
print "----- filter_var Validation Filters: ----- " . "<br>";

$bool = "Elzero";
var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)); // NULL

echo "<br>";

$url = "https://elzero.org/?id=100";
var_dump(filter_var(
  $url,
  FILTER_VALIDATE_URL,
  ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]
)); // string(26) "https://elzero.org/?id=100"

echo "<br>";

$ip = "192.168.2.1";
var_dump(filter_var(
  $ip,
  FILTER_VALIDATE_IP,
  ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]
)); // NULL , ipv6 not ipv4

echo "<br>";

$mac = "00:00:5e:00:53:af";
var_dump(filter_var($mac, FILTER_VALIDATE_MAC)); // string(17) "00:00:5e:00:53:af"


print "<br>";
// ##############################################################################
print "--------------------------------------------------------------" . "<br>";
print "----- filter_var Sanitize Filters: ----- " . "<br>";

$email = "o@n  ¥   n.sa";
var_dump(filter_var($email, FILTER_SANITIZE_EMAIL)); // string(7) "o@nn.sa

echo "<br>";

$int = "100 + !@@@LHKLJKJFKLJKLJFKL  f;ldkf;lsdkfl;ksdf;lkdsf===-100";
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT)); // 100+-100

echo "<br>";

$float = "1,950,150.65AAASSS    sdfdsfsdfsdf@@@@41";
var_dump(filter_var(
  $float,
  FILTER_SANITIZE_NUMBER_FLOAT,
  ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
)); // string(14) "1,950,150.6541)

echo "<br>";

$url = "https://el         zer¥¥¥¥¥o.org";
var_dump(filter_var($url, FILTER_SANITIZE_URL)); // string(18) "https://elzero.org"

print "<br>";
// ##############################################################################
print "--------------------------------------------------------------" . "<br>";
print "----- filter_input: ----- " . "<br>";
print "<br>";

// echo $_GET["num"]; // Warnning before Send

echo filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);

?>

<form action="" method="GET">
  <input type="text" name="num">
  <input type="submit" value="Send">
</form>

<?= "--------------------------------------------------------------" ?>