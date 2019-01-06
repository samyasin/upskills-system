<?php
ob_start();
include_once'../includes/admin_header.php';
?>
<?php include_once'../includes/db_connection.php'; ?>
<?php
//fetch all old data


$query = "select * from category where cat_id = {$_GET['cat_id']}";
$result = mysqli_query($link, $query);
$categoryset = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $category_name = $_POST['category_name'];
    //$category_name = $_POST['category_name'];
    //$category_image = $post['category_image'];
    if ($_FILES['category_image']['error'] == 0) {
        $path = "../uploads/";
        $image_name = $_FILES['category_image']['name'];
        $tmp_name = $_FILES['category_image']['tmp_name'];
        move_uploaded_file($tmp_name, $path . $image_name);
        $query = "update category set cat_name ='$category_name',cat_image='$image_name' where cat_id = {$_GET['cat_id']}";
    }else{
        $query = "update category set cat_name ='$category_name' where cat_id = {$_GET['cat_id']}";
    }

    mysqli_query($link, $query);
    header("location:admin_category.php");
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
                        <form action="" method="post" role="form"  enctype="multipart/form-data" >
                              <div class="form-group">
                              <label>category name</label>
                            <input type="text" class="form-control" name="category_name" value="<?php echo $categoryset['cat_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label>category Image</label>
                                <input type="file" class="form-control" name="category_image">
                            </div>


                            <button type="submit" class="btn btn-primary" name="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.panel-->

    </div><!-- /.col-->
    <div class="col-sm-12">
        <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
    </div>
</div><!-- /.row -->


