<?php include_once '../includes/db_connection.php';

$query="delete from instructor where instructor_id={$_GET['instructor_id']}";
//die;
///echo $query;die;
mysqli_query($link, $query);
$query_image="delete from instructor where instructor_id={$_GET['course_id']}";
mysqli_query($link,$query);
$path = '../uploads/instructor/';
unlink($path.$_GET['photo']);
header("location:instructor.php");
