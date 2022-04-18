<?php include 'header.php';
?>
  <div class="container mt-5 bg-light p-3">
  <form class="row g-3" id="addform">
    <h1 class="mt-5">Add Category</h1>
    <div class="form-floating mb-3 col-md-6">
      <input type="text" class="form-control" id="cname" placeholder="name@example.com">
      <label for="floatingInput">Category Name</label>
    </div>
    <div class="col-12">
      <button type="submit" id="save-button" class="btn btn-primary">Submit</button>
    </div>
    <div id="success-message"></div>
    <div id="error-message"></div>
  </form>
</div>
<?php include 'footer.php'; ?>
