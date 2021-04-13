<?php 
  // Auth check
  include "auth.php";
  $title = 'All Pages';
  include './includes/header.php';
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

  try{
    include ("config.php");
    $sql = "
    SELECT * FROM php_a2_pages;
    ";
    $cmd = $db -> prepare($sql);
    $cmd ->execute();
    // set table variable

    $pageData =  $cmd->fetchAll();
    
    echo '
    <h1>User Table Information</h1>
    <a href="register.php">Add new user</a>

    <table class="table table-dark table-hover"> 
    <thead>
    <th>
    Page Id
  </th>
      <th>
      Page Name
    </th>
    <th>
      Page detail
    </th> 
    <th>
     Edit
    </th> 
    <th>
    Delete
   </th> 
    </thead>';

    foreach ($pageData as $v){
          echo '<tr> 
            <td class="page_id">'
            .$v['page_id']. 
            '</td> <td>' 
            .$v['page_name']. 
            '</td>  <td>'
            .$v['page_detail']. 
            '</td>   ';
            echo '  <td> 
            <a class="btn btn-warning" >Edit</a>
            ';
            echo '</td> <td> 
            <a class="btn btn-danger delete_page_btn" data-toggle="modal" data-target="#DeletePage" >Delete</a>
            ';
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
  // style="display: none; height:0px;"
?>
    </div>
    <!-- DELETE Page Modal -->
  <div class="modal fade" id="DeletePageModal" tabindex="-1" role="dialog" aria-labelledby="DeletePageLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="DeletePageLabel">Confirmation box:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="process_delete_page.php" method="POST">
        <div class="modal-body">
          <input type="text" name="pageId_show" id="pageId_show" />
          <h4>Please confirm to delete page </h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="delete_page" class="btn btn-danger" >DELETE</button>
        </div>
      </form>
    </div>
  </div>
  </div>
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
  <script>
    $(document).ready(function(){
      $('.delete_page_btn').click(function(e){
        e.preventDefault();
        const page_id = $(this).closest('tr').find('.page_id').text();
        console.log("🚀 ~ file: allPages.php ~ line 115 ~ $ ~ page_id", page_id);
          $('#pageId_show').val(page_id);
          $('#DeletePageModal').modal('show');
      })
    });
  </script>
  </main>
</body>
</html>