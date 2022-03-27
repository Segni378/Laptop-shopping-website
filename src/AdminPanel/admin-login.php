<?php
    require('../../config/connection.inc.php');
    require('../../config/functions.inc.php');
    $msg = "";
    if(isset($_POST['submit'])) {
         $email = get_safe_value($con, $_POST['email']);
         $password = get_safe_value($con, $_POST['password']);

         $query = "Select * from admin where email = '$email' and password = '$password'";
         $res = mysqli_query($con, $query);
         $count = mysqli_num_rows($res);

         if($count > 0) {
            $_SESSION['ADMIN_LOGGED_IN'] = 'yes';
            $_SESSION['ADMIN_EMAIL'] = $email;

            header("Location:admin-panel.php");
            die();
         }
         else {
            $msg = "Invalid email or password!";
         }
         
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../../public/asset/css/admin.css">
</head>
<body>
    <div class="admin-login">
    <div class = "admin-login-outer-cointainer">
        <div class = "admin-login-container">
            <div class="admin-login-detail">
                <div class="admin-login-title">
                    <p style="font-weight: bold;">Login <br><br> Manage your products easily with GST admin dashboard!</p>
                </div>
                
                <form  method="post">
                    <span class="admin-login-error"><?php echo $msg ?></span>
                    <div>
                        <label for="email">Email : </label>
                        <input type="email" name = "email" id="email" placeholder="Enter email here..." required>
                        <span></span>
                    </div>
                    <br>
                    <div>
                        <label for="password">Password : </label>
                        <input type="password" name = "password" id="password" placeholder="Enter password here..." required>

                    </div>
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
            <div class="admin-login-image">
                
                <p>Turn Your Ideas into reality</p>
                <span>Consistent quality and experience across all platforms and devices.</span>
                <span class="login-span"><< Login</span>
            </div>
        </div>
    </div>
    </div>
    <div class="admin-login-overlay"></div>
</body>
</html>