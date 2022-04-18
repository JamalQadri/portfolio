<?php include 'header.php'; 
include "conn.php";

if(!isset($_SESSION['admin_name'])){
  header("Location: ../../");
}
?>
<div class="container mt-6 bg-light p-5">
	<div class="row">
			<h1>Post page</h1>
			<a href="addpost.php" class=" w-25 btn btn-outline-success my-4"><h3>Add Post</h3></a> 
			<table class="table table-striped table-hover">
				<thead class="table-dark">
					<tr>
						<th>Sr.No</th>
						<th>Name</th>
						<th>Post</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$sql=$conn->query("SELECT * FROM post");
					$result=$sql->fetchAll(PDO::FETCH_ASSOC);
					foreach($result as $data){
					?>
					<tr>
						<td><?php echo $data['p_id'];?></td>
						<td><?php echo $data['pname'];?></td>
						<td><img src="image/<?php echo $data['pimage'];?>" alt="pimage" width="100" height="100" srcset=""></td>
						<td>
						<a href='insert_ajax.php?pd_id=<?php echo $data['p_id'];?>&imgName=<?php echo $data['pimage'];?>'><button class="btn btn-danger">Delete</button></a> 
						<?php
						if($data['status']==1){
							echo '<a href="insert_ajax.php?pstatus=0&p_id='.$data["p_id"].'"><button class="btn btn-success">active</button></a>'; 
						}else{
							echo '<a href="insert_ajax.php?pstatus=1&p_id='.$data["p_id"].'""><button class="btn btn-warning">Deactive</button></a>';
						}
						?>
						<a href='updatepost.php?pd_id=<?php echo $data['p_id'];?>'><button class="btn btn-secondary">Edit</button></a> 
						 </td>
					</tr>
					<?php } ?>
					
				</tbody>
			  </table>
	</div>
</div>


<?php include 'footer.php'; ?>