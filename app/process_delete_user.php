<?php 

  $id = $_POST["userId_show"];
  try{
    $db = new PDO('mysql:host=172.31.22.43;dbname=Anh200443551', 'Anh200443551', 'C_grD6XN8q');
      $sql = "DELETE FROM php_a2_users WHERE userId = $id ";
      $cmd = $db->prepare($sql);
      $cmd->execute();
      header("location: allusers.php?info=DELETE successfully&$id");
      exit();
      $db = null;
  } catch(PDOException $e){
    // echo "Connection failed" . $e -> getMessage();
    header('Location: error.php');
    exit();
  }


?>