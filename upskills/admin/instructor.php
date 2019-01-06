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
    if ($_FILES['photo']['error'] == 0 && $_FILES['cv']['error'] == 0 ){
        $path = "../uploads/instructor/";
        $image_name = $_FILES['photo']['name'];
        $tmp_name = $_FILES['photo']['tmp_name'];
        move_uploaded_file($tmp_name, $path . $image_name);
        
        $path = "../uploads/cv/";
        $cv_name = $_FILES['cv']['name'];
        $tmp_name = $_FILES['cv']['tmp_name'];
        move_uploaded_file($tmp_name, $path . $cv_name);
        
        // add the record on DB
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $national_id= $_POST['national_id'];
        $major = $_POST['major'];
        $cv = $_FILES['cv']['name'];
        $photo = $_FILES['photo']['name'];
        
        

        $query = "insert into instructor(instructor_name,phone,Email,national_number,major,cv,photo)values('$name','$number','$email',$national_id,'$major','$cv', '$photo')";
//        echo $query;die;
        mysqli_set_charset($link, "utf8");
        mysqli_query($link, $query);
        
}
    //to prevent add new record when we make refresh
    header("location: instructor.php");
exit;}
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
                <div class="panel-heading">Create instructor</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        
                        <form action="" method="post" enctype="multipart/form-data"  role="form">
                            <div class="form-group">
                                <label>name</label>
                                <input class="form-control" placeholder="" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>number</label>
                                <input type="text" class="form-control" name="number">
                            </div>
                            <div class="form-group">
                                <label>email</label>
                                <input class="form-control" placeholder="" type="text" name="email">
                            </div>

                            <div class="form-group">
                                <label>national id</label>
                                <input class="form-control" placeholder="" type="text" name="national_id">
                            </div>

                            <div class="form-group">
                                <label>Major</label>
                                <input class="form-control" placeholder="" type="text" name="major">
                            </div>
                            
                            <div class="form-group">
                                <label>Upload cv</label>
                                <input class="form-control" placeholder="" type="file" name="cv">
                            </div>
                            
                            <div class="form-group">
                                <label>photo</label>
                                <input class="form-control" placeholder="" type="file" name="photo">
                            </div>



                            <button type="submit" class="btn btn-primary" name="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.panel-->
        <div class="col-lg-12">			
            <div class="panel panel-default">
                <div class="panel-heading">View instructor's</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tr>
                                <th>student_id</th>
                                <th>name</th>
                                <th>number</th>
                                <th>email</th>
                                <th>national id</th>
                                <th>major</th>
                                
                                <th>photo</th>
                                <th>cv</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                            <?php
                            $query = "select * from instructor";
                            mysqli_set_charset($link, "utf8");
                            $result = mysqli_query($link, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";

                                echo "<td>{$row['instructor_id']}</td>";

                                echo "<td>{$row['instructor_name']}</td>";
                                echo "<td>{$row['phone']}</td>";
                                echo "<td>{$row['Email']}</td>";
                                echo "<td>{$row['national_number']}</td>";
                                echo "<td>{$row['major']}</td>";
                               
                               // echo "<td><img src='../uploads/instructor/{$row['photo']}' width='120' height='120'/></td>";
                                echo "<td><img src='../uploads/instructor/{$row['photo']}' style='width:50px; height:50px;'></td>";;
                                echo "<td>{$row['cv']}</td>";
                                echo "<td><a href='edit_instructor.php?instructor_id={$row['instructor_id']}'>Edit</a></td>";
                                echo "<td><a href='delete_instructor.php?instructor_id={$row['instructor_id']}'>Delete</a></td>";
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

