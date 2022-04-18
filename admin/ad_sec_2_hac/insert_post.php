<?php
session_start();
if(!isset($_SESSION['admin_gmail'])){
    header("Location: ../../");
}

include "conn.php";
        if(!empty($_GET['PName']) && !empty($_GET['PDesc']) && !empty($_GET['PCat'])){
        $Pname=$_GET['PName'];
        $Pdesc=$_POST['PDesc'];
        $Pcat=$_POST['PCat'];  
        
        $sql=$conn->prepare("INSERT INTO post (pname,pimage,pdescription,cat_id) values (:pname,:pdesc,:cat_id)");
        $PostResult=$sql->execute(array(":pname"=>$Pname,":pdesc"=>$Pdesc,":cat_id"=>$pcat));
       
        if($PostResult){
        echo 1;
        }else{
        echo 0;
        }
    }
?>