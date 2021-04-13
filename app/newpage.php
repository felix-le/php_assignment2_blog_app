<?php 
  $title = 'new page';
  include './includes/header.php';
?>
 <?php include 'includes/navbar.php'; ?>
 <main>
<div class="container">
<h1>Please add your page</h1>
<form method="post" action="process_new_page.php">
    <div class="form-group">
      <label for="page_name">Input Name Page</label>
      <input type="text" class="form-control" name="page_name" id="page_name">
    </div>
    <div class="form-group">
      <label for="page_detail">Page Detail</label>
      <textarea class="form-control" name="page_detail" id="page_detail" rows="3"></textarea>
    </div>
    <button class="btn btn-secondary" type = "submit" name="addNewPage">Save</button>
  </form>
</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
  </main>
</body>
</html>