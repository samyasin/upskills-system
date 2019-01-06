<?php include_once '../includes/db_connection.php';

$query="delete from course where course_id={$_GET['course_id']}";
//die;
///echo $query;die;
mysqli_query($link, $query);
$query_image="delete from course where course_id={$_GET['course_id']}";
mysqli_query($link,$query);
$path = '../uploads/';
unlink($path.$_GET['course_image']);
header("location:admin_course.php");
