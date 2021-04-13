<?php 
  $id = $_POST["pageId_show"];
  try{
    $db = new PDO('mysql:host=172.31.22.43;dbname=Anh200443551', 'Anh200443551', 'C_grD6XN8q');
      $sql = "DELETE FROM php_a2_pages WHERE page_id = $id ";
      $cmd = $db->prepare($sql);
      $cmd->execute();
      header("location: allpages.php?info=DELETE successfully&$id");
      exit();
      $db = null;
  } catch(PDOException $e){
    // echo "Connection failed" . $e -> getMessage();
    header('Location: error.php');
    exit();
  }


?>