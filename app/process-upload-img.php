<?php 
  // Call session start if it hasn't been called already at the first time
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  };
  if($_FILES['myFile']['name'] != null){
    $name = $_FILES['myFile']['name'];
    $name =  trim("LOGO-" . session_id() . "-" . $name);
    session_start();
    $_SESSION['logo_file_name'] = $name;
    $img_alt = $_POST['alt'];
    
    $size = $_FILES['myFile']['size'];

    $tmp_name = $_FILES['myFile']['tmp_name'];
    $type = mime_content_type($tmp_name);
    $ok = true;

    $fileExt = explode(".", $name);
    $allowed = array('jpeg', 'jpeg', 'png');
    $fileActualExt = strtolower(end($fileExt));

    if(in_array($fileActualExt, $allowed)){
      if($size > 10048576){
        header("Location: upload-logo.php?error=Please select file's size smaller than 10Mb");
        $ok = false;
        exit();  
      }
    }else{
        $ok = false;
        header("Location: upload-logo.php?error=Please select an image file");
        exit(); 
      }

    if($ok){
      try{
        include ("config.php");
        $sql = "
        INSERT INTO php_a2_img(img_name, img_alt ) VALUES(:img_name, :img_alt)
        ";
        $cmd = $db -> prepare($sql);
    
        $cmd ->bindParam(':img_name', $name, PDO::PARAM_STR, 235);
        $cmd ->bindParam(':img_alt', $img_alt, PDO::PARAM_STR, 235);
    
        $cmd ->execute();
        $db = null;

        header("Location: upload-logo.php?info=Your image has been uploaded");
        move_uploaded_file($tmp_name, "uploads/img/$name");
        exit(); 
      } catch(PDOException $e){
        // echo "Connection failed" . $e -> getMessage();
        header('Location: error.php');
        exit();
      }
    }

  } else{
    header("Location: upload-logo.php?error=Please select an image file");
    exit(); 
  }

?>