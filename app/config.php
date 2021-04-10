<?php 
  class config{

    public static function connect ()
    {
      $host = '172.31.22.43';
      $username = 'Anh200443551';
      $password = 'C_grD6XN8q';
      $dbname='Anh200443551';

      try{

        $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
      } catch(PDOException $e){
        echo "Connection failed" . $e -> getMessage();
      }
      
      return $con;
    }
  }
?>