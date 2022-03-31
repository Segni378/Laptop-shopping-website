<?php
    require('../../config/connection.inc.php');
    require('../../config/functions.inc.php');
    require('check-if-logged-in.php');
    $category="";
    $msg = "";
    if(isset($_GET['id']) && $_GET['id']!="") {
        $id = get_safe_value($con, $_GET['id']);
        $res = mysqli_query($con, "select * from category where id = '$id'");
        $check = mysqli_num_rows($res);

        if($check > 0) {
            $row = mysqli_fetch_assoc($res);
            $category = $row['name'];
        }
        else {
            header("Location:category.php");
            die();
        }
    }

    if(isset($_POST['submit'])) {

        $categoryName = get_safe_value($con, $_POST['category']);
         if(isset($_GET['id']) && $_GET['id']!="") {
            $update_query = "update category set name = '$categoryName' where id = '$id'";
            mysqli_query($con,$update_query);

            header("Location:category.php");
            die();
         }
         else {
            $res = mysqli_query($con,"select * from category where name = '$categoryName'");
            $check = mysqli_num_rows($res);
            
            if($check > 0) {
                $msg = "Category already exists!";
            } 
            else {

                $query = "insert into category(name, status) values('$categoryName', '1')";
                if(mysqli_query($con, $query) == 1) {
                    $add_category = "Category added successfully!";
                }
                header("Location:category.php");
                die();
            }
        }
        
    }
?>
