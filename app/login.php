<?php 
  $title = 'Please Login';
  include './includes/header.php';
?>
  <?php include 'includes/navbar.php'; ?>
<main class="container">
    <h1>Login</h1>
    <?php if (isset($_GET['info'])) { ?>
      <p class="info"><?php echo $_GET['info']; ?></p>
    <?php } ?>
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    
    <form method="post" action="validateLogin.php" >
        <fieldset class="form-group">
            <label for="email" class="col-2">Email:</label>
            <input name="email" id="email" required type="email" placeholder="email@email.com" />
        </fieldset>
        <fieldset class="form-group">
            <label for="password" class="col-2">Password:</label>
            <input type="password" name="password" id="password" required />
        </fieldset>
        <div class="offset-3">
            <button class="btn btn-primary">Login</button>
        </div>
        <div class="offset-3">
            <a class="btn btn-info" href='register.php'>Register</a>
        </div>
    </form>
</main>

</body>
</html>