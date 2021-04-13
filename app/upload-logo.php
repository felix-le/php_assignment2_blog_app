<?php 
  $title = 'upload logo';
  include './includes/header.php';
  include "auth.php";
?>
<?php include 'includes/navbar.php'; ?>
<main>
  <div class="container ">
  <div class="p-5"></div>
  <?php if (isset($_GET['info'])) { ?>
  <p class="text-info"><?php echo $_GET['info']; ?></p>
  <?php } ?>
  <?php if (isset($_GET['error'])) { ?>
  <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
  <p class="text-info">Please upload a file that its size smaller than 10Mb (10 048 576 Byte)</p>
  <form method="post" action="process-upload-img.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="myFile">Input Logo</label>
      <input type="file" class="form-control-file" name="myFile" id="myFile"
        accept=".png, .jpg, .jpeg">
    </div>
    <div class="form-group">
      <label for="alt">Example textarea</label>
      <textarea class="form-control" id="alt" rows="3"></textarea>
    </div>
    <button class="btn btn-secondary">Upload Now</button>
  </form>
  </div>
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/scripts.php'; ?>
</main>
</body>

</html>