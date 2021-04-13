
<?php 
  // Auth check
  include "auth.php";
  $title = 'All Users';
  include './includes/header.php';
  if($_SESSION['isSuperAdmin'] == 1){
?>
  <?php include 'includes/navbar.php'; ?>
  <main>
    <div class="container">
    <?php if (isset($_GET['info'])) { ?>
      <p class="text-info"><?php echo $_GET['info']; ?></p>
    <?php } ?>
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
  <?php 
  $userId = '';
  try{
    include ("config.php");
    $sql = "
    SELECT * FROM php_a2_users;
    ";
    $cmd = $db -> prepare($sql);
    $cmd ->execute();
    // set table variable

    $userTable =  $cmd->fetchAll();
    
    echo '
    <h1>User Table Information</h1>
    <a href="register.php">Add new user</a>

    <table class="table table-dark table-hover"> 
    <thead>
    <th>
    userId
  </th>
      <th>
      Username
    </th>
    <th>
      Email
    </th> 
    <th>
      Super Admin
    </th> 
    <th>
     DELETE
    </th> 
    </thead>';

    foreach ($userTable as $v){
          echo '<tr> 
            <td class="userId">'
            .$v['userId']. 
            '</td> <td>' 
            .$v['username']. 
            '</td> <td>' 
            .$v['email']. 
            '</td>  <td>';
            if($v['isSuperAdmin']> 0){
              echo 'True';
            } else{
              echo 'False';
            };
            echo '</td> <td> <a class="btn btn-danger delete_btn" data-toggle="modal" data-target="#DeleteUserModal" >Delete</a>';
            echo '</td>';

          echo
            '</td> 
            </tr>';
    };

      echo '</table>';

    $db = null;
  } catch(PDOException $e){
    // echo "Connection failed" . $e -> getMessage();
    header('Location: error.php');
    exit();
  }

?>
    </div>
    <!-- DELETE user Modal -->
  <div class="modal fade" id="DeleteUserModal" tabindex="-1" role="dialog" aria-labelledby="DeleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="DeleteUserModalLabel">Confirmation box:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="process_delete_user.php" method="POST">
        <div class="modal-body">
          <input type="text" name="userId_show" id="userId_show" />
          <h4>Please confirm delete user</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="delete_user" class="btn btn-danger" >DELETE</button>
        </div>
      </form>
    </div>
  </div>
  </div>
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
  <script>
    $(document).ready(function(){
      $('.delete_btn').click(function(e){
        e.preventDefault();
        const userId = $(this).closest('tr').find('.userId').text();
          $('#userId_show').val(userId);
          $('#DeleteUserModal').modal('show');
      })
    });
  </script>
  </main>
</body>
</html>
<?php 
    } else {
      header("Location: index.php?error=Please login a super admin account");
      exit();
    }
  ?>