<!--This code will be called in all files in the same folder.-->
<?php 
    require('../../config/connection.inc.php');
    require('../../config/functions.inc.php');
    $add_category = ""; // To show category added successfully! 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin Panel</title>
    <link rel="stylesheet" href="../../public/asset/css/admin.css">

</head>
<body>
    
    <div class="container-fluid">
        <div class="row min-vh-100 flex-column flex-md-row">
        <aside class="col-12 col-md-3 col-xl-2 p-0 bg-dark ">
            <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-center py-2 text-center sticky-top " id="sidebar">
            <div class="text-center p-3">
                <img src="../../public/image/image4.jpg" class="img-fluid rounded-circle my-4 p-1 d-none d-md-block shadow"/>
            <a href="#" class="navbar-brand mx-0 font-weight-bold  text-nowrap" >GST</a>
            </div>

                    <button type="button" class="navbar-toggler border-0 order-1" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> 
                        <div class="collapse navbar-collapse order-last" id="nav">
                            <ul class="navbar-nav flex-column w-100 justify-content-center">
                                <li class="nav-item"><a href="" class="nav-link active" title="">Category</a></li>
                                <li class="nav-item"><a href="" class="nav-link" title="">Product</a></li>
                                <li class="nav-item"><a href="" class="nav-link" title="">Users</a></li>
                                <li class="nav-item"><a href="" class="nav-link" title="">Orders</a></li>
                                <li class="nav-item"><a href="" class="nav-link" title="">Contact Us</a></li>
                                <li class="nav-item"><a href="Logout.php" class="nav-link" title="">Logout</a></li>
                            </ul>
                        </div>
                    </nav>
                </aside>

           
