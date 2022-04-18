<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Genie Code</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- google fonts -->

	<!-- Css Files -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		@media(prefers-color-scheme:dark){
		:root{
			--background-color:white;
			--color:black;
		}
		}

@media(prefers-color-scheme:light){
		:root{
			--background-color:black;
			--color:white;
		}
		}

		body{
			background-color:var(--background-color);
			color:var(--color);
		}
		
		#cards{
			padding:10px;
			margin-top:10px;
			border-radius:10px;
			box-shadow: 0px 2px 7px 1px grey;
		}
	</style>
</head>

<body id="top" style="margin-top:40px;">
<a href="../index.php" class="btn btn-info ml-2"><i class="fa-solid fa-arrow-left fa-3x"></i>Go Back</a>
    <h1 class="text-center">My Work</h1>
	<div class="container my-5 mx-auto mt-4">
	<div class="row">
	<?php 
		include "../admin/ad_sec_2_hac/conn.php";
		$sql=$conn->query("SELECT * FROM post WHERE status=1");
		$result=$sql->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $data){
	?>
	  <div class="col-sm-6 col-md-4">
		<div class="card" id="cards" style="width: 30rem;">
			<img src="../admin/ad_sec_2_hac/image/<?php echo $data['pimage'];?>" width="280" height="300" class="card-img-top" alt="...">
			<div class="card-body">
			<h5 class="card-title"><?php echo $data['pname'];?></h5>
				<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
			<p class="card-text"><?php echo $data['pdescription'];?></p>

			<a href="#" class="btn btn-success mr-2"><i class="fas fa-link"></i> Visit Site</a>
			<a href="#" class="btn btn-info"><i class="fab fa-github"></i> Github</a>
		</div>
		</div>
		</div>  
		<?php } ?>
	
  </div>
	</div>


	<script src="js/custome.js"></script>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js"></script>
</body>

</html>