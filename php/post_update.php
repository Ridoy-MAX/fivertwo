<?php
session_start();
require('db.php');

if(!(isset($_SESSION['login_start']))) {
    header('location:../admin_login.php');
    die();
  }

date_default_timezone_set('Europe/London');
$image = $title = $article = $tag = $s_dec = $deleteimg = '';
$imageerr = $titleerr = $articleerr = $tagerr = $s_decerr = '';
$post_id = $_POST['postid'];


$_SESSION['postid'] = $post_id;

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    //post title error
    if(empty($_POST['title'])) {
        $titleerr = 'Please enter a title';
        $_SESSION['edit_titleerr'] = $titleerr;
        header('location:../blog-admin/admin.php#edit_correct_post');
    }

    else if((preg_match('/[\^><>]/', $_POST['title']))) {
        $titleerr = '\ ^ > < > are not allowed';
        $_SESSION['edit_titleerr'] = $titleerr;
        $_SESSION['title_name'] = $_POST['title'];
        header('location:../blog-admin/admin.php#edit_correct_post');
    }

    else {
        $title = $_POST['title'];
        $_SESSION['title_name'] = $_POST['title'];
    }

    //post description error
    if(empty($_POST['post_content'])) {
        $articleerr = 'Please enter a description about your article';
        $_SESSION['edit_articleerr'] = $articleerr;
        header('location:../blog-admin/admin.php#edit_correct_post');
    }

    else {
        $article = $_POST['post_content'];
        $_SESSION['article_cont'] = $_POST['post_content'];
    }

    // Short decription error
    if(empty($_POST['s-dec'])) {
        $s_decerr = 'Please write about a short description about your article';
        $_SESSION['edit_s_decerr'] = $s_decerr;
        header('location:../blog-admin/admin.php#edit_correct_post');
    }

    else if((preg_match('/[\~><>]/', $_POST['s-dec']))) {
        $s_decerr = '\ ~ > < > are not allowed';
        $_SESSION['edit_s_decerr'] = $s_decerr;
        $_SESSION['shordec'] = $_POST['s-dec'];
        header('location:../blog-admin/admin.php#edit_correct_post');
    }

    else {
        $s_dec = $_POST['s-dec'];
        $_SESSION['shordec'] = $_POST['s-dec'];
    }

    //post tag error
    if(empty($_POST['tags'])) {
        $tagerr = 'Please enter minimum 1 tag';
        $_SESSION['edit_tagerr'] = $tagerr;
        header('location:../blog-admin/admin.php#edit_correct_post');
    }

    else if((preg_match('/[\^><>]/', $_POST['tags']))) {
        $tagerr = '\ ^ > < > are not allowed ';
        $_SESSION['edit_tagerr'] = $tagerr;
        $_SESSION['tags_cont'] = $_POST['tags'];
        header('location:../blog-admin/admin.php#edit_correct_post');
    }

    else {
        $tag = $_POST['tags'];
        $_SESSION['tags_cont'] = $_POST['tags'];
    }

    if( $title != '' && $article != '' && $tag != '' && $s_dec != '') {

        
        if($_POST['image_remove'] == 'deleteimg' && $_POST['image_name'] != '') {
            $delete_target = '../blog-admin/images/'.$_POST['image_name'];
            unlink($delete_target);
            $delete_update = "UPDATE posts SET image='' WHERE id = '$post_id'";
            $run_delete = mysqli_query($dbconnect, $delete_update);
        }
        //image error
        $image_info = $_FILES['image'];
        if(empty($image_info['name'])) {
            $title = mysqli_escape_string($dbconnect, $title);
            $article = mysqli_escape_string($dbconnect, $article);
            $s_dec = mysqli_escape_string($dbconnect, $s_dec);
            $tag = mysqli_escape_string($dbconnect, $tag);
            $update_blog = "UPDATE posts SET header='$title', article='$article', shortdec='$s_dec', tags='$tag' WHERE id = '$post_id'";
            $update_blog_push = mysqli_query($dbconnect, $update_blog);

                $_SESSION['edit_post_success'] = 'Edited';
                unset($_SESSION['title_name']);
                unset($_SESSION['article_cont']);
                unset($_SESSION['shordec']);
                unset($_SESSION['tags_cont']);
                header('location:../blog-admin/admin.php#editposttab');
        }

        else {
            $image_name_explode = explode('.', $image_info['name']);
            if($image_info['size'] < 2000000) {
                $title = mysqli_escape_string($dbconnect, $title);
                $article = mysqli_escape_string($dbconnect, $article);
                $s_dec = mysqli_escape_string($dbconnect, $s_dec);
                $tag = mysqli_escape_string($dbconnect, $tag);
                $file_name = $post_id . '.' . end($image_name_explode);
                if(file_exists($file_name)) unlink('../blog-admin/images/'.$file_name);
                $new_location = '../blog-admin/images/' . $file_name;
                move_uploaded_file($image_info['tmp_name'], $new_location);

                $update_blog = "UPDATE posts SET image='$file_name', header='$title', article='$article', shortdec='$s_dec', tags='$tag' WHERE id = '$post_id'";
                $update_blog_push = mysqli_query($dbconnect, $update_blog);

                $_SESSION['edit_post_success'] = 'Edited';
                unset($_SESSION['title_name']);
                unset($_SESSION['article_cont']);
                unset($_SESSION['shordec']);
                unset($_SESSION['tags_cont']);
                unset($_SESSION['image_name']);
                header('location:../blog-admin/admin.php#editposttab');
            }

            else {
                $imageerr = 'Please select an image with max 2 MB file size';
                $_SESSION['edit_imageerr'] = $imageerr;
                header('location:../blog-admin/admin.php#edit_correct_post');
            }
        }
    }



}

?>