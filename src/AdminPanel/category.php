<?php

    if(isset($_GET['type']) && $_GET['type'] != '') {
        $type = get_safe_value($con, $_GET['type']);
        $id = get_safe_value($con, $_GET['id']);
        if($type=='status') {
            $operation = get_safe_value($con, $_GET['operation']);

            if($operation=='deactive') {
            
                $status = 0;
            }
            else {
                $status = 1;
            }
            $update_Status = "update category set status = '$status' where id='$id'";
            mysqli_query($con, $update_Status);
        }

        if($type=="delete") {
            $delete_category = "delete from category where id='$id'";
            mysqli_query($con, $delete_category);
        }
    }
    
    $query = "select * from category order by name asc";
    $res = mysqli_query($con, $query);

?>

    <div class = "tab-pane fade show active" id="category" role="tabpanel" aria-labelledby="nav-category-tab">
        <div class="category" >
            <div class="add-category-success"><?php echo $add_category?></div>
            <div class="add-category-btn"><button type="button" class="btn btn-warning" onclick="showAddCatForm();">Add Category</button></div>
            <div class="container py-3">
            <article>
                <h1 class="font-weight-light">Categories</h1>
            </article>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($res)) {?>
                        <tr>
                            <th scope="row"><?php echo $row['id'];?></th>
                            <td><?php echo $row['name'];?></td>
                            <td>
                                <?php 
                                    if($row['status'] == 1)
                                    echo "<span class='active-status'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span> &nbsp;";
                                    else echo "<span class='deactive-status'><a href='?type=status&operation=active&id=".$row['id']."'>Deactive</a></span> &nbsp;";
                                    echo "<span class='edit-category'><a href='?id=".$row['id']."' onclick='showAddCatForm();'>Edit</a></span>&nbsp;";
                                    echo "<span class='delete-category'><a href='?type=delete&operation=delete&id=".$row['id']."'>Delete</a></span>"
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                
                </tbody>
                </table>
        </div>
        </div>  
        
        <div class = "content pb-0 hidden" id="add-category">
     
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
      
</div>

 
