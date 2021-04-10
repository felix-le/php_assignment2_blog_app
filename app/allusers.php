<?php 
  // Auth check
  include "auth.php";
  $title = 'All Users';
  include './includes/header.php';

?>
  <?php 
    if(isset($_SESSION['isSuperAdmin']) == 1){
  ?>
  <h1>this is all pages that only show if you logged in as a super admin</h1>
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>

  <?php 
    } else {
      header("Location: login.php&error= You must login as a super admin");
      exit();
    }
  ?>
</body>
</html>