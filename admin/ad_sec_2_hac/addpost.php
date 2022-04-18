<?php include 'header.php';?>
  <div class="container mt-5 bg-light">
  <form class="row g-3" id="PostForm" enctype="multipart/form-data" method="post">
    <h1 class="mt-5">Add Post</h1>
    <div class="form-floating mb-3 col-md-6">
      <input type="text" class="form-control" id="pname" name="pname" value="" placeholder="name@example.com">
      <label for="floatingInput">Post Name</label>
    </div>
    <div class="col-md-6">
      <input type="file" class="form-control" id="pimg" name="pimg">
    </div>
    <div class="col-md-12">
        <textarea name="pdesc" cols="53" rows="5" id="pdesc" placeholder="Write the post disc..."></textarea>
    </div>
    <div class="col-md-6">
      
      <label for="">Choose Category</label>
      <select name="pcat" id="pcat">
      <?php 
      // fetching categories from category table
      include "conn.php";
        $sql=$conn->query("SELECT * FROM category WHERE status=1");
        $rows=$sql->rowCount();
        if($rows>0){
          $result=$sql->fetchAll(PDO::FETCH_ASSOC);
          foreach($result as $post){
            ?>
        <option col="4" value="<?php echo $post['cat_id'];?>"><?php echo $post['name']?></option>
        <?php
     }}?>
      </select>
    </div>    
    <div class="col-md-12">
      <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  <div id="success-message"></div>
  <div id="error-message"></div>
</div>

<?php include 'footer.php'; ?>