<?php
/* ----------- File upload ---------- */

if (isset($_POST['submit'])) {

  $allowed_file_type = ['png', 'jpg', 'jpeg', 'gif'];

  if (!empty($_FILES['uploadFile']['name'])) {
    $file_name = $_FILES['uploadFile']['name'];
    $file_size = $_FILES['uploadFile']['size'];
    $file_tmp = $_FILES['uploadFile']['tmp_name'];
    $target_dir = "../uploads/{$file_name}";
    //get the file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    if (in_array($file_ext, $allowed_file_type)) {
      if ($file_size <= 1000000) {
        move_uploaded_file($file_tmp, $target_dir);
        $message = '<p>File image is uploaded!</p>';
      } else {
        $message = '<p>File is too larges.</p>';
      }
    } else {
      $message = '<p>Please select an valid file</p>';
    }
  } else {
    $message = '<p>Please select an image file</p>';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Uploading</title>
</head>

<body>
  <?php echo isset($message) ? $message : null; ?>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="" class="form-label">Choose image to upload</label>
      <input type="file" class="form-control" name="uploadFile" id="" placeholder="" aria-describedby="fileHelpId" />
    </div>
    <input type="submit" name="submit" value="submit">
  </form>
</body>

</html>