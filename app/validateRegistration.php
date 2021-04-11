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
  $ok = true;

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

  function checkDoubleData($col, $data ){
    $db = new PDO('mysql:host=172.31.22.43;dbname=Anh200443551', 'Anh200443551', 'C_grD6XN8q');
    $sql = "SELECT * FROM php_a2_users";
    $cmd = $db->prepare($sql);
    $cmd->execute();
    $php_a2_users = $cmd->fetchAll();
    
    foreach ($php_a2_users as $v){
      if($v[$col] == $data){
        header("Location: register.php?error=$data has been registered&$data");
        exit();
      }
    }
  }
  function insertDetails($username, $email, $password, $isSuperAdmin){

    include ("config.php");
    $sql = "
    INSERT INTO php_a2_users(username, email, password, isSuperAdmin) VALUES(:username, :email, :password, :isSuperAdmin)
    ";
    $password = password_hash($password, PASSWORD_DEFAULT);
    $cmd = $db -> prepare($sql);

    $cmd ->bindParam(':username', $username, PDO::PARAM_STR, 320);
    $cmd ->bindParam(':email', $email, PDO::PARAM_STR, 320);
    $cmd ->bindParam(':password', $password,PDO::PARAM_STR, 255);
    $cmd ->bindParam(':isSuperAdmin', $isSuperAdmin);

    $cmd ->execute();
    $db = null;
  };
  if($ok){
    checkDoubleData('username', $username);
    checkDoubleData('email', $email);
    
    if(insertDetails($username, $email, $password, $isSuperAdmin));
    {
      header("Location: login.php?info= Your account has been created");
      exit();
    };
  }
?>