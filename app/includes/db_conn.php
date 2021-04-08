<?php
// class way
  // $db = new PDO('mysql:host=172.31.22.43;dbname=Anh200443551', 'Anh200443551', 'C_grD6XN8q');
  // if (!$db)  {
  //     echo 'could not connect';
  //     $db = null;
  // }else {
  //     echo 'connected to the database';
  // }

  // New Way
  // Check database
$sname = "172.31.22.43";
$uname = "Anh200443551";
$password = "C_grD6XN8q";

$db_name = "Anh200443551";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
// Lost connect
  if (!$conn)  {
      echo 'connection failed';
      $conn = null;
  };
  // END Check database

?> 

