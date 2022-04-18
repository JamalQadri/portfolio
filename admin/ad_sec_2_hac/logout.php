<?php
session_start();
if(!isset($_SESSION['admin_gmail'])){
    header("Location: ../../");
}
session_start();
session_destroy();
header("Location: ../../");
?>