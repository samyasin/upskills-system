<?php

include_once '../includes/db_connection.php';
?>
<?php
$query = "delete  from reg_student where student_id={$_GET['student_id']}";
mysqli_query($link,$query);
header("location:student.php");