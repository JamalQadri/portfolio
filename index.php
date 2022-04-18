<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Genie Code</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- google fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/solid.min.css"
		integrity="sha512-qzgHTQ60z8RJitD5a28/c47in6WlHGuyRvMusdnuWWBB6fZ0DWG/KyfchGSBlLVeqAz+1LzNq+gGZkCSHnSd3g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Css Files -->
	<link rel="stylesheet" href="user/css/bootstrap.min.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="user/css/style.css">
	<style>

	</style>
</head>

<body id="top">
	<header id="navigation" class="navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span>=</span>
				</button>
				<!-- /responsive nav button -->

				<!-- logo -->
				<h2>
					JamalSQ
				</h2>
				<?php if(isset($mail)){
							echo $mail;
						}?>
				<!-- /logo -->
			</div>
			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right">
				<ul id="nav" class="nav navbar-nav menu mx-2 ">
					<li class="fs-3 headerElement"><a href="#top">
							<h4 class="fw-normal fw-bold">Home</h4>
						</a></li>
					<li class="fs-3"><a href="#OurServices">
							<h4>Service</h4>
						</a></li>
					<li class="fs-3"><a href="#AboutUs">
							<h4>About Us</h4>
						</a></li>
					<li class="fs-3"><a href="#ContactUs">
							<h4>Contact</h4>
						</a></li>
				</ul>
			</nav>
			<!-- /main nav -->

		</div>
	</header>
	<!-- video -->

	<!-- end video -->
	<section id="hero">
		<div class="hero-container text-center">
			<div class="text">
				<h1>Self Belief And Hard Work Will Always <br> Earn You Success</h1>
					<h3>Your Success Initial Point Is Here Check It Out</h3></br>
					<a href="user/blog.php" class="btn">Projects</a>
				</div>
			</div>
	</section>

	<section id="OurServices">
		<div class="container service"
			style="box-shadow: 0px 2px 7px 1px grey; border-radius: 20px; margin-bottom: 60px; margin-top: 60px;">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>OUR BEST SERVICES</h2>
					<p>Dantes remained confused and silent by this explanation of the <br> thoughts which had
						unconsciously</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mx-2 services">
					<i class="fa-brands fa-laravel fa-2x"></i>
					<h3>Laravel</h3>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos odit neque recusandae,
						harum esse eaque dolor. Eaque doloremque officiis soluta harum debitis asperiores vitae
						blanditiis atque, molestiae voluptate numquam voluptates.</p>
				</div>
				<div class="col-md-4 services">
					<i class="fa-brands fa-laravel fa-2x"></i>
					<h3>React js</h3>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos odit neque recusandae,
						harum esse eaque dolor. Eaque doloremque officiis soluta harum debitis asperiores vitae
						blanditiis atque, molestiae voluptate numquam voluptates.</p>
				</div>
				<div class="col-md-4 services">
					<i class="fa-brands fa-laravel fa-2x"></i>
					<h3>Responsive Design</h3>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos odit neque recusandae,
						harum esse eaque dolor. Eaque doloremque officiis soluta harum debitis asperiores vitae
						blanditiis atque, molestiae voluptate numquam voluptates.</p>
				</div>
			</div>
		</div>
	</section>


	<section id="AboutUs">
		<div class="container">
			<div class="panel-group" id="accordion">
				<h1 class="text-center">About Us</h1>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><b>Education</b></a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse in">
						<div class="panel-body">
							<ul>
								<li>Schooling: Government High School Lahore</li>
								<li>College: Punjab Group Of Colleges</li>
								<li>University: COMSATS University Islamabad</li>
								<li>Certified: I Am Certified As A Full Stack Developer From Star Academy</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><b>Experience</b></a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><b>Uniqueness</b></a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse">
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- My skills -->
	<div class="container">
		<div class="row skills">
			<h1 class="text-center">My Skills</h1>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-3">
						<span class="skils-text">Laravel</span>
					</div>
					<div class="col-md-9">
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated "
								role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
								style="width: 80%"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-3">
						<span class="skils-text">React Js</span>
					</div>
					<div class="col-md-9">
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
								role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
								style="width: 80%"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-3">
						<span class="skils-text">WordPress</span>
					</div>
					<div class="col-md-9">
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
								role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
								style="width: 85%"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-3">
						<span class="skils-text">Rest API's</span>
					</div>
					<div class="col-md-9">
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
								role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
								style="width: 78%"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- my skills -->

	<section id="ContactUs">
		<div class="container">
			<div class="row" style="box-shadow: 0px 2px 7px 1px grey; border-radius: 20px; padding: 60px;">
				<h1 class="text-center" style="margin-top: -25px;">Contact Us</h1>
				<div class="col-md-8" id="contect-form">

					<form method="post" action="user/email.php" enctype="">
						<div class="form-group">
							<input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
								placeholder="Name" autocomplete="off">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email"
								aria-describedby="emailHelp" placeholder="Email" autocomplete="off">
						</div>
						<div class="form-group">
							<textarea cols="63" rows="5" name="msg" value="msg" class="form-control"
								placeholder="Enter Your Message Here..."></textarea>
						</div>
						<button type="submit" class="button">Submit</button>
						
					</form>
					<ul class="social">
						<li><a href="#"><i class="fa-brands fa-linkedin-in fa-3x"></i></a></li>
						<li><a href="#"><i class="fa-brands fa-twitter fa-3x"></i></li>
						<li><a href="#"><i class="fa-brands fa-facebook-f fa-3x"></i></li>
						<li><a href="#"><i class="fa-brands fa-instagram fa-3x"></i></li>
					</ul>
				</div>
				<div class="col-sm-2 col-md-4 mt-3">
					<a><img src="user/img/dp2.jpg" alt="" srcset="" class="img-thumbnail img-fluid"></a>
				</div>
			</div>
		</div>
	</section>

	<hr>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a><h4 class="text-center">All right reserved 2022</h4></a>
				</div>
			</div>
		</div>
	</footer>
	</div>

	<script src="user/js/custome.js"></script>
	<script src="user/js/jquery-1.11.3.min.js"></script>
	<script src="user/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js"></script>

</body>

</html>