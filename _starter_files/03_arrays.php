<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// associative arrays

$colors = [
  1 => 'green',
  2 => 'blue',
  5 => 'red'
];

$fruits_color = [
  'apple' => 'red',
  'mango' => 'yellow',
  'water melon' => 'green (outside) x red (inside)'
];

echo $colors[2];

echo '<br>';

echo $fruits_color['water melon'];

echo '<br>';

$person = [
  'first_name' => 'louie',
  'last_name' => 'sumayan',
  'email' => 'louie@gmail.com'
];

$people = [
  [
    'first_name' => 'louie',
    'last_name' => 'sumayan',
    'email' => 'louie@gmail.com'
  ],
  [
    'first_name' => 'john',
    'last_name' => 'doe',
    'email' => 'john@gmail.com'
  ],
  [
    'first_name' => 'hane',
    'last_name' => 'doe',
    'email' => 'hane@gmail.com'
  ]
];

echo $people[2]['email'];