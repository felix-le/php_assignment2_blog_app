<?php 
  $host = '172.31.22.43';
  $usernameSV = 'Anh200443551';
  $passwordSV = 'C_grD6XN8q';
  $dbname='Anh200443551';
      // $db = new PDO('mysql:host=172.31.22.43;dbname=Anh200443551', 'Anh200443551', 'C_grD6XN8q');
  try{
    $db  = new PDO("mysql:host=$host;dbname=$dbname", $usernameSV, $passwordSV);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  } catch(PDOException $e){
    // echo "Connection failed" . $e -> getMessage();
    header('Location: error.php');
    exit();
  }
?>