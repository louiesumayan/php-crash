<?php include './inc/header.php'; ?>

<?php

$sql_query = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql_query);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<main>
  <div class="container d-flex flex-column align-items-center">
    <h2>Feedback</h2>

    <?php if (empty($feedback)): ?>
      <p class="lead mt3">There is no feedback</p>
    <?php endif; ?>
    <?php foreach ($feedback as $item): ?>
      <div class="card my-3 w-75">
        <div class="card-body text-center">
          <?php echo $item['feedback'] ?>
          <div class="text-secondary mt2">
            By <?php echo $item['name']; ?> on <?= $item['date']; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>

<?php include './inc/footer.php'; ?>