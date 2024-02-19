<?php

print "<br> ----- تكليفات PHP Bootcamp من الدرس 63 إلى 72 ----- <br>";
print "<br> -------------------- التكليف 01 -------------------- <br>";


$drives = ['C:', 'D:', 'E:', 'F:'];

foreach ($drives as $drive) :

  $total_space_by_byte = disk_total_space($drive);
  $total_space_by_tera = round($total_space_by_byte / (1024 * 1024 * 1024 * 1024), 2);

  echo "$drive - $total_space_by_tera Terabyte\n" . "<br>";

endforeach;


print "<br> -------------------- التكليف 02 -------------------- <br>";

$file_path = 'C:\*\*\Downloads\*.mp4'; // PUT your path Folder or File

$files = glob($file_path); // array of all files in the directory

echo "<pre>";
print_r($files);
echo "</pre>";

if ($files && count($files) > 0) {
  $total_size_by_bytes = 0;
  $total_size_by_mega = 0;
  $total_size_by_kilo = 0;

  foreach ($files as $file) {
    $file_size_bytes = filesize($file); // filesize() return by bytes

    $total_size_by_bytes += $file_size_bytes;
  }

  $total_size_by_mega = round($total_size_by_bytes / (1024 * 1024), 2);
  $total_size_by_kilo = round($total_size_by_bytes / 1024);

  echo "Size In Megabyte Is: $total_size_by_mega" . '<br>';
  echo "Size In Kilobyte Is: $total_size_by_kilo" . '<br>';
} else {
  // No files found
  echo "There Is No Files, Check You File Path :(" . '<br>';
}


print "<br> -------------------- التكليف 03 -------------------- <br>";


$dir_parent = "Programming";
$dir_child = "PHP";

// Set permissions (Owner: read, write, execute = 7; Group & Others: execute only = 5)
$permissions = 0755;

// Check if the child dir exist
$child_path = $dir_parent . DIRECTORY_SEPARATOR . $dir_child;
// Delete The Dir child
if (file_exists($child_path) && is_dir($child_path)) {
  rmdir($child_path);
  echo "Directory $dir_child/$dir_parent Removed" . "<br>";
}

// Delete The Dir parent
if (file_exists($dir_parent) && is_dir($dir_parent)) {
  rmdir($dir_parent);
  echo "Directory $dir_parent Removed" . "<br>";
} else {
  // Create the parent directory
  mkdir($dir_parent, $permissions);
  echo "Directory $dir_parent Created" . "<br>";

  // Create the child directory inside the parent directory
  mkdir($child_path, $permissions);
  echo "Directory $dir_child/$dir_parent Created" . "<br>";
}

print "<br> -------------------- التكليف 04 -------------------- <br>";


function change_permissions($file_name)
{
  // Check if the file exists and is not a directory
  if (!file_exists($file_name) || is_dir($file_name)) {
    return "This Is Directory And Only Files Allowed";
  }

  // Check if the file has a .txt extension
  $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
  if ($file_extension !== 'txt') {
    return "File Extension Is Not Txt";
  }

  // Change the permissions of the file
  // 0700 gives all permissions to the owner =7, and no permissions to anyone else =0
  if (chmod($file_name, 0700)) {
    return "Permissions Changed";
  } else {
    return "Failed to change permissions";
  }
}

echo change_permissions("Elzero") . '<br>'; // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx") . '<br>'; // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed


print "<br> -------------------- التكليف 05 -------------------- <br>";


echo basename(__FILE__) . "<br>";
echo pathinfo(__FILE__, PATHINFO_BASENAME) . "<br>";

echo basename($_SERVER['SCRIPT_NAME']) . "<br>";
echo basename($_SERVER['PHP_SELF']) . "<br>";
echo basename($_SERVER['SCRIPT_FILENAME']) . "<br>";


echo pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_BASENAME) . "<br>";
echo pathinfo($_SERVER['PHP_SELF'], PATHINFO_BASENAME) . "<br>";
echo pathinfo($_SERVER['SCRIPT_FILENAME'], PATHINFO_BASENAME) . "<br>";


print "<br> -------------------- التكليف 06 -------------------- <br>";


$file_name = "elzero.txt";

// Method 1: Using file() function
$lines = file($file_name, FILE_IGNORE_NEW_LINES);
echo $lines[0] . " " . $lines[1] . "<br>";

// Method 2: Using file_get_contents() and explode() functions
$content = file_get_contents($file_name);
$lines = explode("\n", $content);
echo $lines[0] . " " . $lines[1] . "<br>";

// Method 3: Using fopen() and fgets() functions
$handle = fopen($file_name, "r");
if ($handle) {
  $line1 = trim(fgets($handle));
  $line2 = trim(fgets($handle));
  echo $line1 . " " . $line2 . "<br>";
  fclose($handle);
}

// Method 4: Using SplFileObject
$file = new SplFileObject($file_name);
$file->seek(0);
$line1 = trim($file->current());
$file->next();
$line2 = trim($file->current());
echo $line1 . " " . $line2 . "<br>";


print "<br> -------------------- التكليف 07 -------------------- <br>";


// # way 1
$file_path = 'elzero.txt';
$file_contents = file_get_contents($file_path);
$file_contents = str_replace('Osamaa', 'Elzero', $file_contents);
file_put_contents($file_path, $file_contents);


print "<br><br> -------------------- النهاية- The End -------------------- <br><br>";
