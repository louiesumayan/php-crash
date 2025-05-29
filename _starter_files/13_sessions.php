<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start();

if (isset($_POST['submitBTN'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == 'louie' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /PHP-CRASH-COURSE/php-crash/extras/dashboard.php');
  } else {
    echo 'Incorrect Credentials';
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <label for="username">username: </label>
    <input type="text" name="username" id="">
    <label for="password">password: </label>
    <input type="password" name="password" id="">
    <input type="submit" name="submitBTN" value="submit">
  </form>
</body>

</html>