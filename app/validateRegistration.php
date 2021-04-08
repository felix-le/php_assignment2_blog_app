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

  $uname = validate($_POST['username']);
  if(empty($uname)){
    echo 'Username required';
    $ok = false;
  }

?>
<h2>hello</h2>

<?php include 'includes/scripts.php'; ?>
</body>
</html>