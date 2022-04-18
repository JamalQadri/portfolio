<?php include 'header.php'; 
 include "conn.php";

 $pd_id=$_REQUEST['pd_id'];
 $sql=$conn->query("SELECT * FROM post WHERE p_id=$pd_id");
 $results=$sql->fetchAll(PDO::FETCH_ASSOC); 
?>
  <div class="container mt-5 bg-light">
  <form class="row g-3" id="" action="editpost.php" enctype="multipart/form-data" method="POST">
    <h1 class="mt-5">Update Post</h1>
    <div class="mb-3">
      <input type="hidden" name="pid" id="pid" value="<?php echo $results[0]['p_id'];?>">
    </div>
    <div class="form-floating mb-3 col-md-6">
    <input type="text" class="form-control" id="pname" name="pname" value="<?php echo $results[0]['pname'];?>" placeholder="name@example.com">
      <label for="floatingInput">Post Name</label>
    </div> 
    <div class="col-md-6">
      <input type="file" class="form-control" id="pimg" value="" name="new-image">
      <input type="hidden" class="form-control" id="pimg" value="<?php echo $results[0]['pimage'];?>" name="old-image">
      <a href="#"><img src="image/<?php echo $results[0]['pimage'];?>" height="200" width="200"></a>
    </div>
    <div class="col-md-12">
        <textarea name="pdesc" cols="53" rows="5" id="pdesc" value="" placeholder="Write the post disc..."><?php echo $results[0]['pdescription'];?></textarea>
    </div>
    <div class="">
      <input type="hidden" name="status" id="status" value="<?php echo $results[0]['status'];?>">
    </div>
    <div class="col-md-6">
      <label for="">Choose Category</label>
      <select name="pcat" id="pcat">
      <?php 
      // fetching categories from category table
     
        $sql=$conn->query("SELECT * FROM category WHERE status=1");
        $rows=$sql->rowCount();
        if($rows>0){
          $result=$sql->fetchAll(PDO::FETCH_ASSOC);
          foreach($result as $post){
            if($post['cat_id']==$results[0]['cat_id']){  
                echo '<option col="4" selected value="'.$post["cat_id"].'">';
                echo $post['name'];
                echo '</option>'; 
           }else{ 
            echo '<option col="4" value="'.$post["cat_id"].'">';
            echo $post['name'];
            echo '</option>'; 
           
           }}}?>
      </select>
    </div>    
    <div class="col-md-12">
      <button type="submit" id="updatepost" name="updatepost" class="btn btn-primary mb-5">Update Post</button>
    </div>
  </form>
  <?php
  if(isset($msg)){
      echo $msg;
  }
?>
</div>

<?php include 'footer.php'; ?>