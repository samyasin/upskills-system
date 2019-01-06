<?php
ob_start();
include_once '../includes/admin_header.php';
include_once '../includes/db_connection.php';
?>

<?php
// fetch all old data 


$query = "select*from reg_student where student_id={$_GET['student_id']}";
$result = mysqli_query($link, $query);
$studentset = mysqli_fetch_assoc($result);
//echo $query;
//die();


if (isset($_POST['submit'])) {
    //Fetch Data from Web Form
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $national_id = $_POST['national_id'];
    $photo = $_FILES['photo']['name'];
    $course_name = $_POST['course_name'];
    $course_hours = $_POST['course_hours'];
    $course_time = $_POST['course_time'];
    $course_fees = $_POST['course_fees'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $test_result = $_POST['test_result'];
    //update student
    if ($_FILES[error][photo] == 0) {
        $path = "../uploads/student/";
        $image_name = $_FILES['photo']['name'];
        $tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp_name, $path . $image_name);
        $query = "update student set student_name = '$name',
               phone= '$number',
              Email = '$email',
                  national_id='$national_id',
                      photo='$photo',course_name='$course_name' , course_hours='$course_hours', course_time='$course_time'
                          course_fees='$course_fees', start_date='$start_date', end_date='$end_date' , test_result='$test_result'
             where student_id = {$_GET['student_id']}";
    } else {
//        $query = "update student set student_name = '$name',
//               phone= '$number',
//              Email = '$email',
//                  national_id='$national_id',
//                      course_name='$course_name' , course_hours='$course_hours', course_time='$course_time'
//                          course_fees='$course_fees', start_date='$start_date', end_date='$end_date' , test_result='$test_result'
//             where student_id = {$_GET['student_id']}";

        $query = "update student set student_name = '$name',
               phone= '$number',
              Email = '$email',
                  national_id='$national_id',
                      course_name='$course_name' , course_hours='$course_hours', course_time='$course_time'
                          course_fees='$course_fees', start_date='$start_date', end_date='$end_date' , test_result='$test_result'
             where student_id = {$_GET['student_id']}";
    }
    mysqli_query($link, $query);
    header("location:admin_student.php");
}
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Manage student's</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage student's</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">			
            <div class="panel panel-default">
                <div class="panel-heading">update sudent</div>
                <div class="panel-body">
                    <div class="col-md-12">

                        <form action="" method="post" enctype="multipart/form-data"  role="form">
                            <div class="form-group">
                                <label>name</label>
                                <input class="form-control" placeholder="" type="text" name="name" value="<?php echo $studentset['student_name']; ?>" >
                            </div>
                            <div class="form-group">
                                <label>number</label>
                                <input type="text" class="form-control" name="number" value="<?php echo $studentset['phone']; ?>">
                            </div>
                            <div class="form-group">
                                <label>email</label>
                                <input class="form-control" placeholder="" type="text" name="email" value="<?php echo $studentset['Email']; ?>" >
                            </div>

                            <div class="form-group">
                                <label>national id</label>
                                <input class="form-control" placeholder="" type="text" name="national_id" value="<?php echo $studentset['national_id']; ?>" >
                            </div>



                            <div class="form-group">
                                <label>Upload photo</label>
                                <input class="form-control" placeholder="" type="file" name="photo" value="<?php echo $studentset['photo']; ?>" >
                            </div>

                            <div class="form-group">
                                <label>Course name</label>
                                <select class="form-control" name="course_name" value="<?php echo $studentset['course_name']; ?>" >
                                    <?php
                                    $query = "select * from course";
                                    $result = mysqli_query($link, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='{$row['course_id']}'>{$row['course_name']}</option>";
                                    }
                                    ?>
                                </select>  
                            </div>

                            <div class="form-group">
                                <label>course hours</label>
                                <input class="form-control" placeholder="" type="text" name="course_hours" value="<?php echo $studentset['course_hours']; ?>" >
                            </div>

                            <div class="form-group">
                                <label>course time</label>
                                <input class="form-control" placeholder="" type="text" name="course_time" value="<?php echo $studentset['course_time'] ?>" >
                            </div>


                            <div class="form-group">
                                <label>course fees</label>
                                <input class="form-control" placeholder="" type="text" name="course_fees" value="<?php echo $studentset['course_fees'] ?>">
                            </div>

                            <div class="form-group">
                                <label>start date</label>
                                <input class="form-control" placeholder="" type="date" name="start_date" value="<?php echo $studenteset['start_date']; ?>" >
                            </div>

                            <div class="form-group">
                                <label>end date</label>
                                <input class="form-control" placeholder="" type="date" name="end_date" value="<?php echo $studenteset['end_date']; ?>" >
                            </div>

                            <div class="form-group">
                                <label>test result</label>
                                <input class="form-control" placeholder="" type="text" name="test_result" value="<?php echo $studentset['test_result']; ?>" >
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