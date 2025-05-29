<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = [
  'apple',
  'orange',
  'pear'
];

echo count($fruits);

//array concatination

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = [...$arr1, ...$arr2];
echo '<br>';
print_r($arr3);