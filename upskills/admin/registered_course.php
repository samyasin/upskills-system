<?php include_once '../includes/admin_header.php'; ?>		
<?php include_once '../includes/db_connection.php'; ?>
<?php
// the action start if the user click on Submit button
if (isset($_POST['submit'])) {
    //Fetch Data from Wb Form
    $course_name = $_POST['course_name'];
    $hours = $_POST['hours'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $instructor_id = $_POST['instructor_id'];
    
    //add admin to DB
    $query = "insert into reg_course(course_name,hours,start_date,end_date) values('$course_name','$hours',$start_date,'$end_date')";
   $result =  mysqli_query($link, $query);
   if(!$result){
       $error = "Error Hapends";
   }
//    echo $query;die;
//    header("location:registration.php");
    
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Manage registered course</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage registration's</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">			
            <div class="panel panel-default">
                <div class="panel-heading">Create registration</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="registered_course.php" method="post" role="form">
                            <div class="form-group">
                                <label>course name</label>
                                <select class="form-control" name="course_name">
                                    <?php
                                    $query= "select * from course";
                                    $result= mysqli_query($link, $query);                            
                                    while($row= mysqli_fetch_assoc($result)){
                                        echo "<option value='{$row['course_id']}'>{$row['course_name']}</option>";
                                    }

                                    ?>
                                </select>  
                                    
                                    
                                    
                            </div>
                            
                            <div class="form-group">
                                <label>hours</label>
                                <input type="text" class="form-control" name="hours">
                            </div>
                            <div class="form-group">
                                <label>start date</label>
                                <input class="form-control" placeholder="date" type="date" name="start_date">
                            </div>
                            
                            <div class="form-group">
                                <label>end date</label>
                                <input class="form-control" placeholder="" type="date" name="end_date">
                            </div>
                            
                            <div class="form-group">
                                <label>instructor_id</label>
                                <select class="form-control" name="instructor_id">
                                    <?php
                                    $query= "select * from instructor";
                                    $result= mysqli_query($link, $query);                            
                                    while($row= mysqli_fetch_assoc($result)){
                                        echo "<option value='{$row['course_id']}'>{$row['course_name']}</option>";
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
                <div class="panel-heading">View registration</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>course id</th>
                                <th>course name</th>
                                <th> student Name</th>
                                
                                <th>hours</th>
                                <th>start_date</th>
                                <th>end_date</th>
                                <th>instructor id</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            $query = "select * from reg_course";
                            $result = mysqli_query($link, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>{$row['course_id']}</td>";
                                echo "<td>{$row['course_name']}</td>";
                                echo "<td>{$row['hours']}</td>";
                                echo "<td>{$row['start_date']}</td>";
                                echo "<td>{$row['end_date']}</td>";
                                echo "<td>{$row['instructor_id']}</td>";
                                echo "<td><a href='edit_registration.php?admin_id={$row['course_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_registration.php?admin_id={$row['course_id']}'>Delete</a></td>";
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


