<?php
ob_start();
include_once '../includes/admin_header.php';
include_once '../includes/db_connection.php';
?>

<?php
// the action start if the user click on Submit button
if (isset($_POST['submit'])) {
    //Fetch Data from Web Form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $course_id = $_POST['course_id'];
    //add admin to DB
    $query = "insert into student(first_name,last_name,Email,mobile,course_id) values('$first_name','$last_name','$email','$mobile',$course_id)";
    mysqli_query($link, $query);
}
//echo $query;
//die();
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
                <div class="panel-heading">Create sudent</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action="" method="post" role="form">
                            <div class="form-group">
                                <label>first name</label>
                                <input class="form-control" placeholder="" type="text" name="first_name">
                            </div>
                            <div class="form-group">
                                <label>last name</label>
                                <input type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group">
                                <label>email</label>
                                <input class="form-control" placeholder="" type="text" name="email">
                            </div>

                            <div class="form-group">
                                <label>mobile</label>
                                <input class="form-control" placeholder="" type="text" name="mobile">
                            </div>

                            <div class="form-group">
                                <label>course id</label>
                                <input class="form-control" placeholder="" type="text" name="course_id">
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
                                <th>first_name</th>
                                <th>last_name</th>
                                <th>email</th>
                                <th>mobile</th>
                                <th>course_id</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                            <?php
                            $query = "select * from student";
                            $result = mysqli_query($link, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";

                                echo "<td>{$row['student_id']}</td>";

                                echo "<td>{$row['first_name']}</td>";
                                echo "<td>{$row['last_name']}</td>";
                                echo "<td>{$row['Email']}</td>";
                                echo "<td>{$row['course_id']}</td>";
                                echo "<td><a href='edit_student.php?student_id={$row['student_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_student.php?student_id={$row['student_id']}'>Delete</a></td>";
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




























