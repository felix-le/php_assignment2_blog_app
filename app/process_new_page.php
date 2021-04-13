<?php 
  $page_name = $_POST["page_name"];
  $page_detail = $_POST["page_detail"];
  if(!$page_name){
    header('Location: allpages.php?error=Sorry, Please insert your page name');
      exit();
  };
  try{
    $db = new PDO('mysql:host=172.31.22.43;dbname=Anh200443551', 'Anh200443551', 'C_grD6XN8q');
      $sql = "
    INSERT INTO php_a2_pages(page_name, page_detail) VALUES('$page_name', '$page_detail')
    ";
      $cmd = $db->prepare($sql);

      $cmd->execute();
      header("location: allpages.php?info=Add a page successfully");
      exit();
      $db = null;
  } catch(PDOException $e){
    // echo "Connection failed" . $e -> getMessage();
    header('Location: allpages.php?error=Sorry, Something went wrong');
    exit();
  }
?>