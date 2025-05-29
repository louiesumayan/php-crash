<?php

// 1) If this file is the one the browser requested, redirect:
if (realpath(__FILE__) === realpath($_SERVER['SCRIPT_FILENAME'])) {
 header('Location: /PHP-CRASH-COURSE/php-crash/_starter_files/feedback/index.php');
 exit;
}

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'php_crash_course');


//create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check the connection

if ($conn->connect_error) {
 die('Connection Failed' . $conn->connect_error);
}
