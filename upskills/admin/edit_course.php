<?php
ob_start();
include_once '../includes/admin_header.php';
include_once '../includes/db_connection.php';
?>


<?php
//fetch all old data


$query = "select * from course where course_id = {$_GET['course_id']}";
$result = mysqli_query($link, $query);
$courseset = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $course_name = $_POST['course_name'];
    $course_description = $_POST['course_description'];
    $hours = $_POST['hours'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $category_id = $_POST['category_id'];

    //$category_name = $_POST['category_name'];
    //$category_image = $post['category_image'];
    if ($_FILES['image']['error'] == 0) {
        $path = "../uploads/";
        $image_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name, $path . $image_name);
        $query = "update course set course_name ='$course_name',course_desc='$course_description',hour='$hours',start_date='$start_date',end_date='$end_date',course_image='$image_name',cat_id='$category_id' where course_id = {$_GET['course_id']}";
    } else {
        $query = "update course set course_name ='$course_name',course_desc='$course_description',hour='$hours',start_date='$start_date',end_date='$end_date',cat_id='$category_id' where course_id = {$_GET['course_id']}";
    }

    mysqli_query($link, $query);
    header("location:admin_course.php");
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
                <div class="panel-heading">Create Course</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Course Name</label>
                                <input class="form-control" placeholder="" type="text" name="course_name" value="<?php echo $courseset['course_name']; ?>">
                            </div>
                            <div class="form-group">
                                <label>course description</label>
                                <textarea class="form-control" rows="5" name="course_description" value="<?php echo $courseset['course_desc']; ?>"></textarea> 
                            </div>
                            <div class="form-group">
                                <label>Hours</label>
                                <input class="form-control" placeholder="" type="text" name="hours" value="<?php echo $courseset['hour']; ?>" >
                            </div>

                            <div class="form-group">
                                <label>Start Date</label>
                                <input class="form-control" placeholder="" type="date" name="start_date"  value="<?php echo $courseset['start_date']; ?>"  >
                            </div>

                            <div class="form-group">
                                <label>End Date</label>
                                <input class="form-control" placeholder="" type="date" name="end_date" value="<?php echo $courseset['end_date']; ?>"  >
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" placeholder="" type="file" name="image" value="<?php echo $courseset['course_image']; ?>" >
                            </div>

                            <div class="form-group">
                                <label>category Name</label>
                                <select class="form-control" name="category_id">
                                    <?php
                                    $query= "select * from category";
                                    $result= mysqli_query($link, $query);                            
                                    while($row= mysqli_fetch_assoc($result)){
                                        echo "<option value='{$row['cat_id']}' ";
                                        if($courseset['cat_id'] == $row['cat_id']){
                                            echo "selected";
                                        }
                                        echo ">{$row['cat_name']}</option>";
                                    }
                                    ?>
                                </select>
                                
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






























