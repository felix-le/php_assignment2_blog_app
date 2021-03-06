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

  $email = validate($_POST['email']);
  $password = validate($_POST['password']);
  $ok = true;
  if( empty($email)  ){
    header("Location: login.php?error=Email is required&$email");
    $ok = false;
    exit();
  }
  if(empty($password)  ){
    header("Location: login.php?error=Password is required&$password");
    $ok = false;
    exit();
  }

  function checkData( $email, $password){
    try{
      $db = new PDO('mysql:host=172.31.22.43;dbname=Anh200443551', 'Anh200443551', 'C_grD6XN8q');
        $sql = "SELECT * FROM php_a2_users";
        $cmd = $db->prepare($sql);
        $cmd->execute();
        $php_a2_users = $cmd->fetchAll();
        
        foreach ($php_a2_users as $v){

          if($v['email'] == $email && password_verify($password, $v['password']) ){
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $v['username'];
            $_SESSION['isSuperAdmin'] = $v['isSuperAdmin'];
            $_SESSION['id'] = session_id();
            header('Location: index.php');
            exit();
          } 
        };
        {
          header("Location: login.php?error=Email or password is incorrect");
          exit(); 
        }
    } catch(PDOException $e){
      // echo "Connection failed" . $e -> getMessage();
      header('Location: error.php');
      exit();
    }
    
  }

  if($ok){
    checkData($email, $password);
  }
?>