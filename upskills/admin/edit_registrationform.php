<?php 
ob_start();
include_once '../includes/admin_header.php';		
include_once '../includes/db_connection.php';
?>
<?php
//fetch Old Data 
$query    = "select * from reg where reg_id={$_GET['reg_id']}";
$result   = mysqli_query($link, $query);
$adminSet = mysqli_fetch_assoc($result);
//print_r($adminSet);
// the action start if the user click on Submit button
if (isset($_POST['submit'])) {
    //Fetch Data from Wb Form
     $course_id = $_POST['course_id'];
    $student_id = $_POST['student_id'];
    $date = $_POST['date'];
    $hours = $_POST['hours'];
    $fees = $_POST['fees'];
    //update admin to DB
    $query = "update reg set course_id = '$course_id',
               
              date = '$date' , hours='$hours' , fees='$fees'
             where reg_id = {$_GET['reg_id']}";    
    mysqli_query($link, $query);
    header("location:registration.php");
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Manage Registration's</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Registration's</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">			
            <div class="panel panel-default">
                <div class="panel-heading">Update Form</div>
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
                                <input type="text" class="form-control" name="student_id">
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" placeholder="date" type="date" name="date">
                            </div>
                            
                            <div class="form-group">
                                <label>Hours</label>
                                <input class="form-control" placeholder="" type="text" name="hours">
                            </div>
                            
                            <div class="form-group">
                                <label>fees</label>
                                <input class="form-control" placeholder="" type="text" name="fees">
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="submit">Add</button>
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



