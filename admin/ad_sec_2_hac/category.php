<?php include 'header.php'; 
include "conn.php"; 
?>
  <div class="container mt-6 bg-light p-5 radius">
	<div class="row">
			<h1>Category page</h1>
			<a href="addcategory.php" class=" w-25 btn btn-outline-success my-4"><h5>Add Category</h5></a> 
		
			<table class="table table-striped table-hover">
				<thead class="table-dark">
					<tr>
						<th>Sr.No</th>
						<th>Name</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php  
					 $sql=$conn->query("SELECT * FROM category");
					 $result=$sql->fetchAll(PDO::FETCH_ASSOC);
					foreach($result as $data){       
					?>
				<tr>
						<td><?php echo $data['cat_id'];?></td>
						<td><?php echo $data['name'];?></td>
						<td>
              <a href='insert_ajax.php?d_id=<?php echo $data['cat_id'];?>'><button class="btn btn-danger">Delete</button></a> 
			  <?php
			  if($data['status']==1){
				echo '<a href="insert_ajax.php?status=0&cat_id='.$data["cat_id"].'"><button class="btn btn-success">active</button></a>'; 
			  }else{
				 echo '<a href="insert_ajax.php?status=1&cat_id='.$data["cat_id"].'""><button class="btn btn-warning">Deactive</button></a>';
			  }
			  ?>
              
            </td>
					</tr>
						<?php } ?>
					
				</tbody>
			  </table>
	</div>
</div>
<?php include 'footer.php'; ?>