<?php
session_start();

// destroy the session
session_destroy();
header('Location: /PHP-CRASH-COURSE/php-crash/_starter_files/13_sessions.php');
