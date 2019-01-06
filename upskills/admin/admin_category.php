<?php include_once'../includes/admin_header.php';?>
<?php include_once'../includes/db_connection.php';?>
<?php 
if(isset($_POST['submit'])){
    //echo '<pre>';
    //  print_r($_FILES);
    // to move file you must check there is no errors 
    if($_FILES['category_image']['error'] == 0){
        $path       = "../uploads/";
        $image_name =  $_FILES['category_image']['name'];
        $tmp_name   = $_FILES['category_image']['tmp_name'];
        move_uploaded_file($tmp_name, $path.$image_name);
        // add the record on DB
        $category_name = $_POST['category_name'];
         $arabic_name = $_POST['arabic_name'];
        
        $query="insert into category(cat_name,ar_name,cat_image)values('$category_name','$arabic_name','$image_name')";
        //echo $query;die;
        mysqli_set_charset($link, "utf8");
        mysqli_query($link, $query);
    }
}

?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Manage Category's</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage category's</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">			
            <div class="panel panel-default">
                <div class="panel-heading">Create Category</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="admin_category.php" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>category name</label>
                                <input type="text" class="form-control" name="category_name">
                            </div>
                            
                            <div class="form-group">
                                <label>category arabic name</label>
                                <input type="text" class="form-control" name="arabic_name">
                            </div>
                            <div class="form-group">
                                <label>category Image</label>
                                <input type="file" class="form-control" name="category_image">
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.panel-->
        <div class="col-lg-12">			
            <div class="panel panel-default">
                <div class="panel-heading">View Admin</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>category_id</th>
                                <th>category_name</th>
                                <th>arabic_name</th>
                                <th>Category Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php                         
                            $query= "select*from category";
                             mysqli_set_charset($link, "utf8");
                           $result= mysqli_query($link, $query);
                            
                            while($row= mysqli_fetch_assoc($result))
                            {
                                echo"<tr>";
                                echo"<td>{$row['cat_id']}</td>";
                                echo"<td>{$row['cat_name']}</td>";
                                echo"<td>{$row['ar_name']}</td>";
                                echo"<td><img src='../uploads/{$row['cat_image']}' width='120' height='120'/></td>";
                                echo "<td><a href='edit_category.php?cat_id={$row['cat_id']}&cat_image={$row['cat_image']}'>Edit</td>";
                                echo "<td><a href='delete_category.php?cat_id={$row['cat_id']}&cat_image={$row['cat_image']}'>Delete</a></td>";
                                echo "</tr>";
                                
                            }
                            
                            ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>


    </div><!-- /.col-->
    <div class="col-sm-12">
        <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
    </div>
</div><!-- /.row -->


