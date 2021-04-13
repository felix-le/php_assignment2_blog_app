<?php 
  $title = 'About';
  include './includes/header.php';
?>
 <?php include 'includes/navbar.php'; ?>
 <main>
<div class="container">
<?php 
  try{
    include ("config.php");
    $sql = "
    SELECT * FROM php_a2_pages;
    ";
    $cmd = $db -> prepare($sql);
    $cmd ->execute();
    // set table variable
    $pageData =  $cmd->fetchAll(); 

    foreach ($pageData as $v){
     if($v['page_name'] == $title ){
      echo '<h1 class="title_page">This is '.$v['page_name'].' Page </h1>';
      echo '<p class="description_page">'.$v['page_detail'].'</p>';
     }
    }
    $db = null;
  }catch(PDOException $e){
      // echo "Connection failed" . $e -> getMessage();
      header('Location: error.php');
      exit();
    }
  ?>
</div>




<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
  </main>
</body>
</html>