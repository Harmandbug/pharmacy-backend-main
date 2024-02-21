<?php

 session_start();
if (isset($_SESSION['manager_email'])){
    
    
require '../admin/config.php';
require '../views/header.view.php';
require '../views/navbar.view.php';    









require '../views/adduser.view.php';
require '../views/footer.view.php';

}
?>