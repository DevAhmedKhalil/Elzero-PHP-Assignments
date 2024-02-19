<?php

print "<br> ----- [Week 12] - تكليفات PHP Bootcamp من الدرس 98 إلى 105 ----- <br>";

print "<br> -------------------- التكليف 01 -------------------- <br>";

// setcookie("site[layout]", "boxed", strtotime("+2 months +5 days"), '/');
// setcookie("site[font]", "Swat", strtotime("+2 months +5 days"), '/');
// setcookie("site[color]", "blue", strtotime("+2 months +5 days"), '/');
print "DONE => show in Application Cookies" . "<br>";

print "<br> -------------------- التكليف 02 -------------------- <br>";

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

// Check if the cookies are set and if the keys exist
echo "Your Color Is " . $_COOKIE["site"]["font"] . " And Your Font Is " . $_COOKIE["site"]["color"];


print "<br>";
print "<br> -------------------- التكليف 03 -------------------- <br>";
print "<br>";

if (isset($_COOKIE["site"]["layout"])) {
  setcookie("site[layout]", "", time() - 1, '/');
}
setcookie("site[font]", "Swat", strtotime("+2 months +5 days"), '/');
setcookie("site[color]", "blue", strtotime("+2 months +5 days"), '/');
print "DONE => show in Application Cookies" . "<br>";


print "<br> -------------------- التكليف 04 -------------------- <br>";


setcookie("site[font]", "Swat", 0, '/');
setcookie("site[color]", "blue", 0, '/');

print "DONE => show in Application Cookies" . "<br>";


print "<br><br> -------------------- النهاية- The End -------------------- <br><br>";
