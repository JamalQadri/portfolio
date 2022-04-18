<?php
include "conn.php";
session_start();
if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){

        $name=htmlspecialchars_decode($_POST['name']);
        $email=htmlspecialchars_decode($_POST['email']);
        $pass=htmlspecialchars_decode($_POST['password']);

        $sql=$conn->query("SELECT * FROM admin");
        $result=$sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $data){

            if($data['a_gmail']==$email && $data['a_pass']==$pass){

                $_SESSION["admin_name"] = $data["a_name"];
                $_SESSION["admin_gmail"] = $data["a_gmail"];

            echo "<script>window.location='category.php'</script>";
            }
            else{
               $msg = "<div class='alert alert-danger'>Your Email or Password is wrong</div>";
            }
        }

    }
}


?>
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
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,800&family=Roboto:wght@100;300&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="../../user/css/bootstrap.min.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="css/style.css">

	<style>
        .container{
            margin-top: 100px;
            width:750px;
            }
        .login{
           
            border-bottom: 2px solid black;
            padding: 10px 0px 10px 10px;

        }
	</style>
</head>
<body>


    <section id="ContactUs">
        <div class="container width">
            <div class="row" style="box-shadow: 0px 2px 7px 1px grey; border-radius: 20px; padding: 60px;">
                <h1 class="text-center" style="margin-top: -25px;">Admin Login</h1>
                <div class="col-md-12" id="contect-form">
                    <form method="POST" action="" enctype="">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" class="login"
                                placeholder="Name" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" class="login"
                                aria-describedby="emailHelp" placeholder="Email" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" class="login"
                                placeholder="Password" autocomplete="off" required>
                        </div>
                        <button type="submit" name="submit" value="submit" class="button">Submit</button>
                        <?php 
                        if(isset($msg)){
                            echo $msg;
                        };
                        
                           
                        ?>

                    </form>
                </div>
    
            </div>
        </div>
    </section>

	<script src="../../user/js/jquery-1.11.3.min.js"></script>
	<script src="../../user/js/bootstrap.min.js"></script>
	<script src="../user/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js"></script>
</body>

</html>