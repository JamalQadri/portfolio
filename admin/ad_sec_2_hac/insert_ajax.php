<?php

session_start();
if(!isset($_SESSION['admin_gmail'])){
    header("Location: ../../");
}

include "conn.php";
// For inserting category
if(isset($_POST['cat_name'])){
    $cat_name=$_POST['cat_name'];
     $sql=$conn->prepare("INSERT INTO category (name,status) values (:cat_name,:is_home)");
     $result1=$sql->execute(array(":cat_name"=>$cat_name,":is_home"=>0));
    if($result1){
        echo 1;
    }else{
        echo 0;
    }
}

    // For updating status of the category
    if(isset($_GET['status'])){
        $status=$_GET['status'];
        $cat_id=$_GET['cat_id'];
        $sql=$conn->prepare("UPDATE category SET status= $status WHERE cat_id=$cat_id");
        $result=$sql->execute();
        if($result){
            echo 1;
        }else{
            echo 0;
        }
        header("location: category.php");
     }
    
    //  Delete the category
     
    if(isset($_GET['d_id'])){
        $d_id=$_GET['d_id'];
        $sql = $conn->prepare("DELETE FROM category where cat_id=$d_id");
		$sql->execute();
        header("location: category.php");
    }

    // Post data is inserted
    if(isset($_POST['pname'])){
    if($_POST['pname'] == "" || $_POST['pdesc'] == "" || $_POST['pcat'] == "" || $_FILES['pimg']['name'] == ""){
        echo 0;
    }else{
        $Pname=htmlspecialchars_decode(trim($_POST['pname']));
        $Pdesc=htmlspecialchars_decode(trim($_POST['pdesc']));
        $Pcat=htmlspecialchars_decode(trim($_POST['pcat']));
        $status=0;
            $file_name=htmlspecialchars_decode(trim($_FILES['pimg']['name']));
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
            $fileName=time().".".$ext;
            move_uploaded_file($_FILES['pimg']['tmp_name'],"image/".$fileName);
          
        $sql=$conn->prepare("INSERT INTO post (pname,pimage,pdescription,status,cat_id) values (?,?,?,?,?)");
        $sql->bindParam(1, $Pname);
        $sql->bindParam(2, $fileName);
        $sql->bindParam(3, $Pdesc);
        $sql->bindParam(4, $status);
        $sql->bindParam(5, $Pcat);
        $PostResult=$sql->execute();
        if($PostResult){
         echo 1;
        }else{
          echo 0;
        }
    }}
    // Post data  updated code
    if(isset($_POST['p_id'])){
        if($_POST['pname'] == "" || $_POST['pdesc'] == "" || $_POST['pcat'] == "" || $_FILES['pimg']['name'] == ""){
            echo 0;
        }else{
            $Pname=htmlspecialchars_decode(trim($_POST['pname']));
            $Pdesc=htmlspecialchars_decode(trim($_POST['pdesc']));
            $Pcat=htmlspecialchars_decode(trim($_POST['pcat']));
            $status=0;
                $file_name=htmlspecialchars_decode(trim($_FILES['pimg']['name']));
                $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                $fileName=time().".".$ext;
                move_uploaded_file($_FILES['pimg']['tmp_name'],"image/".$fileName);
              
            $sql=$conn->prepare("INSERT INTO post (pname,pimage,pdescription,status,cat_id) values (?,?,?,?,?)");
            $sql->bindParam(1, $Pname);
            $sql->bindParam(2, $fileName);
            $sql->bindParam(3, $Pdesc);
            $sql->bindParam(4, $status);
            $sql->bindParam(5, $Pcat);
            $PostResult=$sql->execute();
            if($PostResult){
             echo 1;
            }else{
              echo 0;
            }
        }}

       

    // POST delete code
    if(isset($_GET['pd_id'])){
        $pd_id=$_GET['pd_id'];
        $imgName=$_GET['imgName'];
        $sql = $conn->prepare("DELETE FROM post where p_id=$pd_id");
        unlink('image/'.$imgName);
		$sql->execute();
        header("location: post.php");
    }

     // For updating status of the category
     if(isset($_GET['pstatus'])){
        $pstatus=$_GET['pstatus'];
        $p_id=$_GET['p_id'];
        $sql=$conn->prepare("UPDATE post SET status= $pstatus WHERE p_id=$p_id");
        $result=$sql->execute();
        if($result){
            echo 1;
        }else{
            echo 0;
        }
        header("location: post.php");
     }
    
?>