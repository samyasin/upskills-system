<?php include_once '../includes/db_connection.php';

$query = "delete from admin where admin_id = {$_GET['admin_id']}";
mysqli_query($link, $query);
header("location:admin.php");


