<?php 
  // Auth check
  include "auth.php";
  $title = 'All Users';
  include './includes/header.php';
  if($_SESSION['isSuperAdmin'] == 1){
?>

  <h1>this is all pages that only show if you logged in as a super admin</h1>
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>

  
</body>
</html>
<?php 
    } else {
      header("Location: index.php?error=Please login a super admin account");
      exit();
    }
  ?>