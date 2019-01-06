<?php
//session_start();
//print_r($_SESSION);die;
ob_start();

include_once '../includes/admin_header.php';
include_once '../includes/db_connection.php';
?>

<?php
if (isset($_POST['submit'])) {
    //echo '<pre>';
    //  print_r($_FILES);
    // to move file you must check there is no errors 
    if ($_FILES['photo']['error'] == 0) {
        $path = "../uploads/student/";
        $image_name = $_FILES['photo']['name'];
        $tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp_name, $path . $image_name);
        // add the record on DB
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
        $admin_id = $_SESSION['admin_id'];


        $query = "insert into reg_student(student_name,phone,Email,national_id,photo,course_name,course_hours,course_time,course_fees,start_date,end_date,test_result)values('$name','$number','$email',$national_id,'$photo','$course_name', '$course_hours','$course_time','$course_fees','$start_date','$end_date','$test_result')";
//        echo $query;die;
        mysqli_set_charset($link, "utf8");
        mysqli_query($link, $query);
    }
    //to prevent add new record when we make refresh
    header("location: student.php");
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
            <h1 class="page-header">Manage student's</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-lg-12">			
            <div class="panel panel-default">
                <div class="panel-heading">Create student</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="" method="post" enctype="multipart/form-data"  role="form">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" placeholder="" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control" name="number">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" placeholder="" type="text" name="email">
                            </div>

                            <div class="form-group">
                                <label>National ID</label>
                                <input class="form-control" placeholder="" type="text" name="national_id">
                            </div>
                            <div class="form-group">
                                <label>Upload Photo</label>
                                <input class="form-control" placeholder="" type="file" name="photo">
                            </div>
                            <div class="form-group">
                                <label>Course name</label>
                                <select class="form-control" name="course_name">
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
                                <label>Course Hours</label>
                                <input class="form-control" placeholder="" type="text" name="course_hours">
                            </div>
                            
                            <div class="form-group">
                                <label>Course Time</label>
                                 
                                
                                 <select class="form-control">
                                    <option>9-11</option>
                                    <option>10-12</option>
                                    <option>11-1</option>
                                    <option>12-2</option>
                                    <option>1-3</option>
                                    <option>2-4</option>
                                    <option>4-6</option>
                                    <option>5-7</option>
                                    <option>6-8</option>
                                    <option>12-4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Days program</label>
                                <input type="checkbox" name="days_program" value="sun">Sunday</input>
                                <input type="checkbox" name="days_program" value="mon">Monday</input>
                                <input type="checkbox" name="days_program" value=tue>Tuesday</input>
                                <input type="checkbox" name="days_program" value=tue>Wednesday</input>
                                <input type="checkbox" name="days_program" value=tue>Thursday</input>
                                <input type="checkbox" name="days_program" value=tue>Saturday</input>

                                <div class="form-group">
                                    <label>Payment Type</label>
                                    <select class="form-control" name="payment_type">
                                        <option>cash</option>
                                        <option>payment</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Admin Id</label>
                                    <select class="form-control" name="admin_id">
                                        <?php
                                        $query = "select * from admin";
                                        $result = mysqli_query($link, $query);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='{$row['admin_id']}'>{$row['full_name']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Course Fees</label>
                                    <input class="form-control" placeholder="" type="text" name="course_fees">
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
                                    <label>Start Date</label>
                                    <input class="form-control" placeholder="" type="date" name="start_date">
                                </div>

                                <div class="form-group">
                                    <label>End Date</label>
                                    <input class="form-control" placeholder="" type="date" name="end_date">
                                </div>

                                <div class="form-group">
                                    <label>Test Result</label>
                                    <input class="form-control" placeholder="" type="text" name="test_result">
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
                                <th>student_id</th>
                                <th>name</th>
                                <th>number</th>
                                <th>email</th>
                                <th>national id</th>
                                <th>course name</th>
                                <th>course hours</th>
                                <th>course time</th>
                                <th>course fees</th>
                                <th>start date</th>
                                <th>end date</th>
                                <th>test result</th>

                                <th>photo</th>
                                <th>Edit</th>
                                <th>delete</th>

                            </tr>
                            <?php
                            $query = "select * from reg_student";
                            mysqli_set_charset($link, "utf8");
                            $result = mysqli_query($link, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";

                                echo "<td>{$row['student_id']}</td>";

                                echo "<td>{$row['student_name']}</td>";
                                echo "<td>{$row['phone']}</td>";
                                echo "<td>{$row['Email']}</td>";
                                echo "<td>{$row['national_id']}</td>";

                                echo "<td>{$row['course_name']}</td>";
                                echo "<td>{$row['course_hours']}</td>";
                                echo "<td>{$row['course_time']}</td>";
                                echo "<td>{$row['course_fees']}</td>";
                                echo "<td>{$row['start_date']}</td>";
                                echo "<td>{$row['end_date']}</td>";
                                echo "<td>{$row['test_result']}</td>";
                                echo "<td><img src='../uploads/student/{$row['photo']}' width='120' height='120'/></td>";
                                echo "<td><a href='edit_student.php?student_id={$row['student_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_regstudent.php?student_id={$row['student_id']}'>Delete</a></td>";
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


