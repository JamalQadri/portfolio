<?php
include "conn.php";
// update post data
        
        if(isset($_POST['updatepost'])){
            
            if(isset($_POST['pname']) == "" || isset($_POST['pdesc']) == "" || isset($_POST['pcat']) == ""){
                $msg='<div class="alert alert-success">The post is not updated</div>';
            }else{

                $Pname=htmlspecialchars_decode(trim($_POST['pname']));
                $Pdesc=htmlspecialchars_decode(trim($_POST['pdesc']));
                $Pcat=htmlspecialchars_decode(trim($_POST['pcat']));
                $P_id=htmlspecialchars_decode(trim($_POST['pid']));
                $status=htmlspecialchars_decode(trim($_POST['status']));
              
                if(empty($_FILES['new-image']['name'])){
                    $fileName=$_POST['old-image'];
                }else{
                    $oldfile=$_POST['old-image'];
                    unlink('image/'.$oldfile);
                    $file_name=htmlspecialchars_decode(trim($_FILES['new-image']['name']));
                    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                    $fileName=time().".".$ext;
                    move_uploaded_file($_FILES['new-image']['tmp_name'],"image/".$fileName);    
                }
  
                $sql=$conn->prepare("UPDATE post SET pname=?,pimage=?,pdescription=?,status=?,cat_id=? WHERE p_id=?");
                $sql->bindParam(1, $Pname);
                $sql->bindParam(2, $fileName);
                $sql->bindParam(3, $Pdesc);
                $sql->bindParam(4, $status);
                $sql->bindParam(5, $Pcat);
                $sql->bindParam(6, $P_id);
                $PostResult=$sql->execute();
                if($PostResult){
                 $msg='<div class="alert alert-success">The post is updated</div>';
                 header("Location: post.php");
                }else{
                    $msg='<div class="alert alert-success">The post is not updated</div>';
                }
              
            }

        }
?>    