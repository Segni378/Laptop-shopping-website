<?php
     include('admin-panel.php'); 
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
    <main class="main-section col px-0 flex-grow-1">
        <div class = "content pb-0">
            <div class = "animated fadeIn">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><strong>Categories</strong><small>&nbsp;Form</small></div>
                    </div>
                    <form method="post">
                        <div class="card-body card-block">
                            <div class="form-group mb-2">
                                <label for="category" class="form-control-label">Category</label>
                                <input type="text" name="category" class="form-control" placeholder="Enter category name..." value="<?php echo $category?>"  required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary"id="payment-button" class="btn btn-lg btn-info btn-block"><span class="payment-button-amound"><?php if($category!="") echo "Update"; else echo "Add";?></span></button>
                        </div>
                    </form>
                    <div class = "field-error"><?php echo $msg?></div>
                </div>
            </div> 
        </div> 
    </main>
 </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </body>
</html>