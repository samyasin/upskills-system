<?php
ob_start();
include_once '../includes/admin_header.php';
include_once '../includes/db_connection.php';
?>

<?php
if (isset($_POST['submit'])) {
    //echo '<pre>';
    //  print_r($_FILES);
    // to move file you must check there is no errors 
    if ($_FILES['image']['error'] == 0) {
        $path = "../uploads/";
        $image_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name, $path . $image_name);
        // add the record on DB
        $course_name = $_POST['course_name'];
        $arabic_name = $_POST['arabic_name'];
        $course_description = $_POST['course_description'];
        $arabic_description = $_POST['arabic_description'];
        $hours = $_POST['hours'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        
        $category_id = $_POST['category_id'];

        $query = "insert into course(course_name,course_ar_name,course_desc,course_ar_desc,hour,start_date,end_date,course_image,cat_id)values('$course_name','$arabic_name','$course_description','$arabic_description','$hours','$start_date', '$end_date','$image_name',$category_id)";
        mysqli_set_charset($link, "utf8");
        mysqli_query($link, $query);
        
    }
    //to prevent add new record when we make refresh
    header("location: admin_course.php");
exit;
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
            <h1 class="page-header">Manage Course's</h1>
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
                                <input class="form-control" placeholder="" type="text" name="course_name">
                            </div>
                            
                            <div class="form-group">
                                <label>Course Arabic Name</label>
                                <input class="form-control" placeholder="" type="text" name="arabic_name">
                            </div>
                            
                            <div class="form-group">
                                <label>course description</label>
                                <textarea class="form-control" rows="5" name="course_description"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>course arabic description</label>
                                <textarea class="form-control" rows="5" name="arabic_description"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Hours</label>
                                <input class="form-control" placeholder="" type="text" name="hours">
                            </div>

                            <div class="form-group">
                                <label>Start Date</label>
                                <input class="form-control" placeholder="" type="date" name="start_date">
                            </div>

                            <div class="form-group">
                                <label>End Date</label>
                                <input class="form-control" placeholder="" type="date" name="end_date">
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input class="form-control" placeholder="" type="file" name="image">
                            </div>

                            <div class="form-group">
                                <label>Category Name</label>
                                <select class="form-control" name="category_id">
                                    <?php
                                    $query= "select * from category";
                                    $result= mysqli_query($link, $query);                            
                                    while($row= mysqli_fetch_assoc($result)){
                                        echo "<option value='{$row['cat_id']}'>{$row['cat_name']}</option>";
                                    }

                                    ?>
                                </select>                                
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.panel-->
        <div class="col-lg-12">			
            <div class="panel panel-default">
                <div class="panel-heading">View student's</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>course Id</th>
                                <th>course Name</th>
                                <th>course Arabic  Name</th>
                                <th>course Description</th>
                                <th>course Arabic Description</th>
                                <th>Hours</th>
                                <th>start Date</th>
                                <th>End Date</th>
                                <th>Image</th>
                                <th>Category Id</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                            <?php
                            $query = "select * from course";
                            mysqli_set_charset($link, "utf8");
                            $result = mysqli_query($link, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";

                                echo "<td>{$row['course_id']}</td>";

                                echo "<td>{$row['course_name']}</td>";
                                echo "<td>{$row['course_ar_name']}</td>";
                                echo "<td>{$row['course_desc']}</td>";
                                echo "<td>{$row['course_ar_desc']}</td>";
                                echo "<td>{$row['hour']}</td>";
                                echo "<td>{$row['start_date']}</td>";
                                echo "<td>{$row['end_date']}</td>";
                                echo "<td><img src='../uploads/{$row['course_image']}' width='120' height='120'/></td>";
                                echo "<td>{$row['cat_id']}</td>";
                                echo "<td><a href='edit_course.php?course_id={$row['course_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_course.php?course_id={$row['course_id']}'>Delete</a></td>";
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






























