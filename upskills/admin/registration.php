<?php include_once '../includes/admin_header.php'; ?>		
<?php include_once '../includes/db_connection.php'; ?>
<?php
// the action start if the user click on Submit button
if (isset($_POST['submit'])) {
    //Fetch Data from Wb Form
    $course_id = $_POST['course_id'];
    $student_id = $_POST['student_id'];
    $date = $_POST['date'];
    $hours = $_POST['hours'];
    $fees = $_POST['fees'];
    //add admin to DB
    $query = "insert into reg(course_id,student_id,date,hours,fees) values('$course_id','$student_id','$date','$hours','$fees')";
    mysqli_query($link, $query);
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
            <li class="active">Manage registration's</li>
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
                        <form action="registration.php" method="post" role="form">
                            <div class="form-group">
                                <label>course name</label>
                                <select class="form-control" name="course_id">
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
                                <label>student name</label>
                                <select class="form-control" name="student_name">
                                    <?php
                                   $query= "select*from reg_student";
                                  $result= mysqli_query($link, $query);
                                  while($row= mysqli_fetch_assoc($result)){
                                  echo"<option value='{$row['student_id']}'>{$row['student_name']} </option>";
                                  
                                  }
                                  
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Register Date</label>
                                <input class="form-control" placeholder="date" type="date" name="date">
                            </div>
                            
                            <div class="form-group">
                                <label>#Hours</label>
                                <input class="form-control" placeholder="" type="text" name="hours">
                            </div>
                            <div class="form-group">
                                <label>Registration Type</label>
                                <select class="form-control">
                                    <option>Public</option>
                                    <option>Private</option>
                                    <option>Corporates</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Course Fees</label>
                                <input class="form-control" placeholder="" type="text" name="fees">
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
                                <th>registration id</th>
                                <th>course id</th>
                                <th> student Name</th>
                                <th>date</th>
                                <th>hours</th>
                                <th>fees</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            $query = "select * from reg";
                            $result = mysqli_query($link, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>{$row['reg_id']}</td>";
                                echo "<td>{$row['course_id']}</td>";
                                echo "<td>{$row['student_id']}</td>";
                                echo "<td>{$row['date']}</td>";
                                echo "<td>{$row['hours']}</td>";
                                echo "<td>{$row['fees']}</td>";
                                echo "<td><a href='edit_registrationform.php?admin_id={$row['reg_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_registrationform.php?admin_id={$row['reg_id']}'>Delete</a></td>";
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


