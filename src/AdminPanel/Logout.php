<?php
    session_start();
   
    unset($_SESSION['ADMIN_LOGGED_IN']);
    unset($_SESSION['ADMIN_EMAIL']);
    
    header("Location:admin-login.php");
    die();
?>