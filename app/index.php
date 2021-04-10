<?php 
  $title = 'Home';
  include './includes/header.php';
?>
<main>
  <h1>Hello World!</h1>
  <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
  <?php include 'includes/navbar.php'; ?>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
  </main>
</body>
</html>