<?php 
  // Auth check
  include "auth.php";
  $title = 'All Pages';
  include './includes/header.php';
?>
  <?php include 'includes/navbar.php'; ?>
  <main>
  <h1>this is all pages that only show if you logged in</h1>
  
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
  </main>
</body>
</html>