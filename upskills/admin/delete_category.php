

<?php include_once '../includes/db_connection.php';

$query="delete from category where cat_id={$_GET['cat_id']}";
//die;
///echo $query;die;
mysqli_query($link, $query);
$query_image="delete from category where cat_id={$_GET['cat_id']}";
mysqli_query($link,$query);
$path = '../uploads/';
unlink($path.$_GET['cat_image']);
header("location:admin_category.php");