<?php
    include('../../config/connection.inc.php');
    include('../../config/functions.inc.php');

    $msg= '';

    if(isset($_POST['submit-btn'])){
        echo $User_Id=get_safe_value($con,$_POST['User_Id']);
        echo $password=get_safe_value($con,$_POST['password']);
        $sql="select * from login where User_Id='$User_Id' and password='$password'";
        $res=mysqli_query($con,$sql);
        $count=mysqli_num_rows($res);
        if($count>0){

        }else{
            $msg="Please enter correct login details";
        }
    }
?>

