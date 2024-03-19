<?php

print "<br> ----- تكليفات PHP Bootcamp من الدرس 92 إلى 97 ----- <br>";

print "<br> -------------------- التكليف 01 -------------------- <br>";

date_default_timezone_set("Asia/Riyadh");
echo date_default_timezone_get();
print "<br>";

echo date_format(date_create(), "D, d M y - H:i:s A");
print "<br>";
echo date_format(date_create(), "l, d F Y - H:i:s A");

// Output Needed
// "Asia/Riyadh"
// "Wed, 09 Nov 22 - 07:11:22 PM"
// "Wednesday, 09 November 2022 - 07:11:22 PM"


print "<br> -------------------- التكليف 02 -------------------- <br>";

$date = "2005-10-02";

date_default_timezone_set("Africa/Cairo");
echo date_default_timezone_get();
print "<br>";

// Convert the date string to a DateTime object
$dateTime = new DateTime($date);

//# way 1: with date_add()
// date_add($dateTime, date_interval_create_from_date_string("15 hours 15 minutes 15 seconds"));
// echo date_format($dateTime, "Y, F, l 'dS' H:i:s");

//# way 2: with dateTime -> modify() 
$dateTime->modify("+15 hours +15 minutes +15 seconds");
$dateTime->format("Y, F, l 'dS' H:i:s");


// Output Needed
// "Africa/Cairo"
// "2005, October, Sunday '02nd' 15:15:15"


print "<br> -------------------- التكليف 03 -------------------- <br>";
print "<br>";


$date = "1990-10-01";

date_default_timezone_set("Africa/Cairo");

// 1) Convert the date string to a Unix timestamp
$timestamp = strtotime($date);

// 2) Calculate Days Number and Years number From the Epoch time
$daysFromEpoch = round($timestamp / 60 / 60 / 24, 1);
$yearsFromEpoch = round($daysFromEpoch / 365, 1);


echo "From Epoch Time Till $date Is Approximately $daysFromEpoch Days<br>";
echo "From Epoch Time Till $date Is Approximately $yearsFromEpoch Years";
print "<br>";

// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7577.9 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20.8 Years"


print "<br> -------------------- التكليف 04 -------------------- <br>";

$date = "1990-10-01";

// 1) Set the default timezone to Africa/Cairo
date_default_timezone_set("Africa/Cairo");


// 2) Create DateTime Objects for the provided date and teh epoch time
$dateObj = new DateTime($date);
$epochObj = new DateTime("1970-01-01");

// 3) Calculate the difference between the two objects
$difference = date_diff($epochObj, $dateObj);

// echo "<pre>";
// print_r($difference); // can't use $difference access [] as array 
// echo "</pre>";

echo "From Epoch Time Till $date Is Approximately " .  $difference->days . " Days<br>";
echo "From Epoch Time Till $date Is Approximately " .  $difference->y . " Years<br>";


// Output Needed
// "From Epoch Time Till 1990-10-01 Is Approximately 7578 Days"
// "From Epoch Time Till 1990-10-01 Is Approximately 20 Years"

print "<br> -------------------- التكليف 05 -------------------- <br>";

// With time() Function
echo time() . "<br>";

echo strtotime("now") . "<br>";

echo (new DateTime())->getTimestamp() . "<br>";

echo floor(microtime(true)) . "<br>";


$microTime = explode(' ', microtime());
// echo "<pre>";
// print_r($microTime);
// echo "</pre>";
echo $microTime[1] . "<br>";


// Output Needed With Other Ways
// 1708254015
// 1708254015
// 1708254015
// 1708254015
// 1708254015

print "<br> -------------------- The End - النهاية -------------------- <br>";
