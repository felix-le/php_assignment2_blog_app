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
            <h1>Hello World!</h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
              <?php } ?>
            <?php include 'includes/navbar.php'; ?>
					<?php }?>
</main>
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
  </main>
</body>
</html>