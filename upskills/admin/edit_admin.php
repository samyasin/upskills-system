<?php 
ob_start();
include_once '../includes/admin_header.php';		
include_once '../includes/db_connection.php';
?>
<?php
//fetch Old Data 
$query    = "select * from admin where admin_id={$_GET['admin_id']}";
$result   = mysqli_query($link, $query);
$adminSet = mysqli_fetch_assoc($result);
//print_r($adminSet);
// the action start if the user click on Submit button
if (isset($_POST['submit'])) {
    //Fetch Data from Wb Form
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $full_name = $_POST['full_name'];
    //update admin to DB
    $query = "update admin set user_name = '$username',
              password = '$password',
              full_name = '$full_name'
             where admin_id = {$_GET['admin_id']}";    
    mysqli_query($link, $query);
    header("location:admin.php");
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Manage Admin's</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Admin's</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">			
            <div class="panel panel-default">
                <div class="panel-heading">Update Admin</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="" method="post" role="form">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" placeholder="Username" type="text" name="username" value="<?php echo $adminSet['user_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" value="<?php echo $adminSet['password']; ?>" >
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" placeholder="Full Name" type="text" name="full_name" value="<?php echo $adminSet['full_name'];?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.panel-->
        


    </div><!-- /.col-->
    <div class="col-sm-12">
        <p class="back-link">Upskills 2018 <a href="https://www.upskills-academy.com">upskills-Academy</a></p>
    </div>
</div><!-- /.row -->
</div><!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>

</body>
</html>

