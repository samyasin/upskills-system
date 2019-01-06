<?php
ob_start();
include_once '../includes/admin_header.php';
include_once '../includes/db_connection.php';
?>


<?php
//fetch all old data


$query = "select * from instructor where instructor_id = {$_GET['instructor_id']}";
$result = mysqli_query($link, $query);
$instructorset = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $national_id= $_POST['national_id'];
        $major = $_POST['major'];
        $cv = $_FILES['cv']['name'];
        $photo = $_FILES['photo']['name'];

    //$category_name = $_POST['category_name'];
    //$category_image = $post['category_image'];
    if ($_FILES['image']['error'] == 0 && $_FILES['cv']['error'] == 0 ) {
        $path = "../uploads/instructor/";
        $image_name = $_FILES['photo']['name'];
        $tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp_name, $path . $image_name);
        
        $path = "../uploads/cv/";
        $cv_name = $_FILES['cv']['name'];
        $tmp_name = $_FILES['cv']['tmp_name'];
        move_uploaded_file($tmp_name, $path . $cv_name);
       
        $query = "update instructor set  instructor_name='$name',phone='$number',Email='$email',national_number='$national_id',major='$major',cv='$cv',photo='$photo' where instructor_id= {$_GET['instructor_id']}";
    } else {
               $query = "update instructor set  instructor_name='$name',phone='$number',Email='$email',national_number='$national_id',major='$major',cv='$cv' where instructor_id= {$_GET['instructor_id']}";

    }

    mysqli_query($link, $query);
    header("location:instructor.php");
    
//    echo '<script language="javascript">';
//  echo 'alert(message successfully sent)';  //not showing an alert box.
//  echo '</script>';
//  exit;
}
?>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Manage instructor's</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage instructor's</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">			
            <div class="panel panel-default">
                <div class="panel-heading">update instructor</div>
                <div class="panel-body">
                    <div class="col-md-12">
                       <form action="" method="post" enctype="multipart/form-data"  role="form">
                            <div class="form-group">
                                <label>name</label>
                                <input class="form-control" placeholder="" type="text" name="name" value="<?php echo $instructorset['instructor_name']; ?>"  >
                            </div>
                            <div class="form-group">
                                <label>number</label>
                                <input type="text" class="form-control" name="number" value="<?php echo $instructorset['phone']; ?>" >
                            </div>
                            <div class="form-group">
                                <label>email</label>
                                <input class="form-control" placeholder="" type="text" name="email"  value="<?php echo $instructorset['Email']; ?>"  >
                            </div>

                            <div class="form-group">
                                <label>national id</label>
                                <input class="form-control" placeholder="" type="text" name="national_id" value="<?php echo $instructorset['national_number']; ?>"  >
                            </div>

                            <div class="form-group">
                                <label>Major</label>
                                <input class="form-control" placeholder="" type="text" name="major" value="<?php echo $instructorset['major']; ?>"  >
                            </div>
                            
                            <div class="form-group">
                                <label>Upload cv</label>
                                <input class="form-control" placeholder="" type="file" name="cv" value="<?php echo $instructorset['cv']; ?>" >
                            </div>
                            
                            <div class="form-group">
                                <label>photo</label>
                                <input class="form-control" placeholder="" type="file" name="photo" value="<?php echo $instructorset['photo']; ?>"  >
                            </div>



                            <button type="submit" class="btn btn-primary" name="submit">update</button>
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































