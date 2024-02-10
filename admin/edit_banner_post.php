
<?php
session_start();
require_once '../db.php';
// print_r($_POST);

$banner_id = $_POST['banner_id'];
$banner_title = $_POST['banner_title'];
$banner_subtitle = $_POST['banner_subtitle'];


$update_query = "UPDATE banners SET banner_title='$banner_title' , banner_subtitle='$banner_subtitle' WHERE id='$banner_id'";
mysqli_query($db_connect , $update_query);
header("location: add_banner.php");

?>