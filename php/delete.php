<?php
session_start();
require('db.php');

if(!(isset($_SESSION['login_start']))) {
    header('location:../admin_login.php');
    die();
  }

$post_id = $_GET['id'];

$change_status = "UPDATE posts SET status='2' WHERE id = '$post_id'";
$change_push = mysqli_query($dbconnect, $change_status);
header('location:../blog-admin/admin.php#deleteposttab');

?>