<?php
    if(isset($_SESSION['ADMIN_LOGGED_IN']) && $_SESSION['ADMIN_LOGGED_IN'] != "") {
        
    }
    else {
        header('Location:admin-login.php');
    }

?>