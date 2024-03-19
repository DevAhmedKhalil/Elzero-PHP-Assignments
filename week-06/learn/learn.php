<?php

// declare(strict_types=1);

function add(int $a, int $b): int # int $a, int $b
{
  return $a + $b;
}

echo add(5, 10); // Output: 15
print "<br>";
echo add(5.5, 10.5); // Output: 15 (with strict_types disabled, PHP will convert the float values to integers)
print "<br>";



function calculate($n1, $n2): int #  $n1,  $n2
{
  return $n1 + $n2;
}
echo calculate(10.5, 9.5); // Output: 20
print "<br>";
echo gettype(calculate(10.5, 9.5)); // Output: integer
