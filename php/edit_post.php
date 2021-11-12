<?php
session_start();
require('db.php');

if(!(isset($_SESSION['login_start']))) {
    header('location:../admin_login.php');
    die();
  }
$postid = $_GET['id'];

$selectpost = "SELECT * FROM posts WHERE id = '$postid' ";
$selectpost_push = mysqli_query($dbconnect, $selectpost);
$afterassoc = mysqli_fetch_assoc($selectpost_push);

$_SESSION['postid'] = $postid;
$_SESSION['image_name'] = $afterassoc['image'];
$_SESSION['title_name'] = $afterassoc['header'];
$_SESSION['article_cont'] = $afterassoc['article'];
$_SESSION['shordec'] = $afterassoc['shortdec'];
$_SESSION['tags_cont'] = $afterassoc['tags'];

header('location:../blog-admin/admin.php#editcorrectpost');



?>