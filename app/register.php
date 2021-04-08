<?php 
  $title = 'Register';
  include './includes/header.php';
?>
<!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  -->
<main class="container">
    <h1>User Registration</h1>
    <form method="post" action="validateRegistration.php" novalidate>
        <fieldset class="form-group">
                <label for="email" class="col-2">Username:</label>
                <input name="username" id="username" required type="username" placeholder="username" />
            </fieldset>
        <fieldset class="form-group">
            <label for="email" class="col-2">Username:</label>
            <input name="email" id="email" required type="email" placeholder="email@email.com" />
        </fieldset>
        <fieldset class="form-group">
            <label for="password" class="col-2">Password:</label>
            <input type="password" name="password" id="password" required
                   
									 />
        </fieldset>
        <fieldset class="form-group">
            <label for="confirm" class="col-2">Confirm Password:</label>
            <input type="password" name="confirm" id="confirm" required
/>
        </fieldset>
        <fieldset class="d-flex align-items-center"> 
            <label for="isSuperAdmin">Super Admin: </label>
            <input type="checkbox" id="statusDone" name="isSuperAdmin" value='1'>
          </fieldset>
        <div class="offset-3">
            <button class="btn btn-primary">Register</button>
        </div>
    </form>
</main>
<?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</body>
</html>