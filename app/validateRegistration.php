<?php 
  $title = 'Register page';
  include './includes/header.php';
  include_once ("config.php");
  // validate data from server side
	function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $con  = config::connect();

  $username = validate($_POST['username']);
  $email = validate($_POST['email']);
  $password = validate($_POST['password']);
  $confirm = validate($_POST['confirm']);
  $isSuperAdmin = isset($_POST['isSuperAdmin']) ? $_POST['isSuperAdmin'] : 0 ;


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
  if($password != $confirm){
    header("Location: register.php?error=Password must match&$confirm");
    $ok = false;
    exit();
  }

  function checkDoubleData($col, $data){
    $db = new PDO('mysql:host=172.31.22.43;dbname=Anh200443551', 'Anh200443551', 'C_grD6XN8q');
    $sql = "SELECT * FROM php_a2_users";
    $cmd = $db->prepare($sql);
    $cmd->execute();
    $php_a2_users = $cmd->fetchAll();
    
    foreach ($php_a2_users as $v){
      echo $v[$col] ;

      if($v[$col] == $data){
        echo 'trung roi ';
        exit();
      }
    }
  }
  function insertDetails($con, $username, $email, $password, $isSuperAdmin){

    $query = $con -> prepare("
    INSERT INTO php_a2_users(username, email, password, isSuperAdmin) VALUEs(:username, :email, :password, :isSuperAdmin)
  ");
  $con -> beginTransaction();
  $query ->bindParam(':username', $username);
  $query ->bindParam(':email', $email);
  $query ->bindParam(':password', $password);
  $query ->bindParam(':isSuperAdmin', $isSuperAdmin);

  $query ->execute();

};
checkDoubleData('username', $username);





  
  // If all of the fieldset are correct

  // if(insertDetails($con, $username, $email, $password, $isSuperAdmin,$ok));
  // {
  //   echo "Your account has been created successfully";
  // };
?>