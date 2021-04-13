<?php 
  $title = 'Home';
  include './includes/header.php';
?>
<main>
<?php include 'includes/navbar.php'; ?>
<?php 
  				// Call session start if it hasn't been called already at the first time
					if(session_status() == PHP_SESSION_NONE){
						session_start();
					};
				?>
				<?php
					if(empty($_SESSION['username'])){
            header('location: publicIndex.php');
            exit();
					} else{ ?>
					<main>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
              <?php } ?>
            <?php include 'includes/navbar.php'; ?>
            <div class="container">
              <ul class="no-bullet p-3">
                <li class="list-item mt-3"><a href="allpages.php">All Pages</a> <p class="text-info small">Add / Remove / Edit - All Pages</p></li>
                <li class="list-item mt-5"><a href="allusers.php">All Users</a> <p class="text-info small">Add / Remove / Edit - Only Super Admin (superadmin@gmail.com - pass 1) </p></li>
                <li class="list-item mt-5"><a href="upload-logo.php"> Upload Logo Site</a> <p class="text-info small">Add / Remove / Edit - All Pages</p></li>
              </ul>
            </div>
					<?php }?>
</main>
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
  </main>
</body>
</html>