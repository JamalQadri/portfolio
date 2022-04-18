
<?php
session_start();
if(!isset($_SESSION['admin_gmail'])){
  header("Location: ../../");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>JamalSQ</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- google fonts -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Css Files -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,800&family=Roboto:wght@100;300&display=swap"
    rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.js"></script>
  <?php include "custom.php"?>

  <style>
    #logout{
      text-decoration: none;
      color:red;
      padding:5px;
      border-radius:5px;
      border:1px solid red;
    }
    #logout:hover{
      color:white;
      background-color:red;

    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">JamalSQ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex">
          <li class="nav-item">
            <a class="nav-link" href="category.php">CATEGORY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.php">POST</a>
          </li>
        </ul>
      </div>
    </div>
  <?php
    echo "<a href='logout.php' id='logout'>Logout</a>";
    echo "<h2 class='mx-5'>".$_SESSION["admin_name"]."</h2>";
  ?>
  </nav>