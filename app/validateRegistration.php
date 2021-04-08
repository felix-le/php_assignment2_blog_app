<?php 
  $title = 'Register page';
  include './includes/header.php';

  // validate data from server side
	function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $username = validate($_POST['username']);
  $email = validate($_POST['email']);
  $password = validate($_POST['password']);
  $confirm = validate($_POST['confirm']);
  $isSuperAdmin = isset($_POST['isSuperAdmin']) ? $_POST['isSuperAdmin'] : 0 ;

  $register_data = 'username = ' . $username . '&email=' . $email . '&password=' . $password . '&confirm=' . $confirm . '&isSuperAdmin=' . $isSuperAdmin;

  if(empty($username)){
    header("Location: register.php?error=Username is required&$username");
    $ok = false;
    exit();
  }
  if( empty($email)  ){
    header("Location: register.php?error=Email is required&$email");
    $ok = false;
    exit();
  }
  if(empty($password)  ){

    header("Location: register.php?error=Password is required&$password");
    $ok = false;
    exit();
  }
  if( $password != $confirm){
    header("Location: register.php?error=Password must match&$confirm");
    $ok = false;
    exit();
  }


?>
<h2>hello</h2>

<?php include 'includes/scripts.php'; ?>
</body>
</html>