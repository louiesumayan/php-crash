<?php

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

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($i = 0; $i < count($people); $i++) {
  echo $people[$i]['first_name'] . '<br>';
}

echo '<br>';

echo 'ODD EVEN NUMBERS FOR LOOPS';
echo '<br>';
echo '<br>';
for ($n = 1; $n <= 20; $n++) {
  if ($n % 2) {
    echo "number {$n} is odd <br>";
  } else {
    echo "number {$n} is even <br>";
  }
}
echo '<br>';
echo '<br>';


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

foreach ($people as $value) {
  var_dump($value);
}
