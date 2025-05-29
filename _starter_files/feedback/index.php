<?php $page_title = "HOME PAGE"; ?>
<?php include './inc/header.php'; ?>

<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];

  if (empty($name) || empty($email) || empty($feedback)) {
    $message = "<p class='text-center bg-warning p-2 w-50 text-black'>All fields are mandatory</p>";
  } else {
    $stmt = $conn->prepare("INSERT INTO feedback (name,email,feedback) VALUES(?,?,?)");
    $stmt->bind_param("sss", $name, $email, $feedback);
    $message = $stmt->execute()
      ? "<p class='text-center bg-success p-2 w-50 text-white' text-success'>Thank you for your feedback!</p>"
      : "<p class='text-center bg-warning p-2 w-50 text-black'>Error submitting feedback.</p>";
    $stmt->close();
  }

  /*
  
  stmt - short for statement.
  $stmt->bind_param("sss", $name, $email, $feedback); - a type definition string that tells MySQLi what types of variables you’re binding to the SQL query.

  Each character corresponds to one parameter and its data type:

  s = string

  i = integer

  d = double (floating point number)

  b = blob (binary data)

  If you had a query like:


$stmt = $conn->prepare("INSERT INTO users (name, age, balance) VALUES (?, ?, ?)");
$stmt->bind_param("sid", $name, $age, $balance);
"s" for $name (string)

"i" for $age (integer)

"d" for $balance (double/float)
  
  */

}


?>

<main>
  <div class="container d-flex flex-column align-items-center">
    <img src="/PHP-CRASH-COURSE//php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="" />
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Traversy Media</p>

    <!-- Display message here -->
    <?php if (isset($message))
      echo $message; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" />
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control" id="body" name="feedback" placeholder="Enter your feedback"></textarea>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100" />
      </div>
    </form>
  </div>
</main>
<?php include './inc/footer.php'; ?>