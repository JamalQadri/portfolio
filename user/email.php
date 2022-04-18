<?php
include "../admin/ad_sec_2_hac/conn.php";
        
    if(isset($_POST['email'])){
        if(!empty($_POST['name']) && !empty($_POST['name']) && !empty($_POST['name'])){
            $email=$_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $msg=$_POST['msg'];  
                $sql=$conn->prepare("INSERT INTO email (name,email,msg) values (:name,:email,:msg)");
                $email=$sql->execute(array(":name"=>$name,":email"=>$email,":msg"=>$msg));
                if($email){
                    mail("qadrij688@gmail.com",$name,$msg);
                    header("Location: ../index.php");
                   $mail = '<div class="alert alert-success" role="alert">Your message is submitted successfully! I shall respond in a few minuts.<div>';
                }else{
                    header("Location: ../index.php");
                    $mail = '<div class="alert alert-success" role="alert">Your msg is not submitted. Sorry for Inconvience<div>';
                   } 
              } else {
                header("Location: ../index.php");
                 $mail = '<div class="alert alert-success" role="alert">Please Enter valid email<div>';
                   }
           
         
         }
    }
       
?>