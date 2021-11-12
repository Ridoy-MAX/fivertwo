<?php
session_start();
require('db.php');
if(!(isset($_SESSION['login_start']))) {
    header('location:../admin_login.php');
    die();
  }

date_default_timezone_set('Europe/London');
$image = $title = $article = $tag = $s_dec = $date ='';
$imageerr = $titleerr = $articleerr = $tagerr = $s_decerr = '';

$date = date("y-m-d");

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    //post title error
    if(empty($_POST['title'])) {
        $titleerr = 'Please enter a title';
        $_SESSION['titleerr'] = $titleerr;
        header('location:../blog-admin/admin.php#addposttab');
    }

    else if((preg_match('/[\^><>]/', $_POST['title']))) {
        $titleerr = '\ ^ > < > are not allowed';
        $_SESSION['titleerr'] = $titleerr;
        $_SESSION['title'] = $_POST['title'];
        header('location:../blog-admin/admin.php#addposttab');
    }

    else {
        $title = $_POST['title'];
        $_SESSION['title'] = $_POST['title'];
    }

    //post description error
    if(empty($_POST['post_content'])) {
        $articleerr = 'Please enter a description about your article';
        $_SESSION['articleerr'] = $articleerr;
        header('location:../blog-admin/admin.php#addposttab');
    }

    else {
        $article = $_POST['post_content'];
        $_SESSION['article'] = $_POST['post_content'];
    }

    // Short decription error
    if(empty($_POST['s-dec'])) {
        $s_decerr = 'Please write about a short description about your article';
        $_SESSION['s_decerr'] = $s_decerr;
        header('location:../blog-admin/admin.php#addposttab');
    }

    else if((preg_match('/[\^><>]/', $_POST['s-dec']))) {
        $s_decerr = ' \ ^ > < > are not allowed';
        $_SESSION['s_decerr'] = $s_decerr;
        $_SESSION['s_dec'] = $_POST['s-dec'];
        header('location:../blog-admin/admin.php#addposttab');
    }

    else {
        $s_dec = $_POST['s-dec'];
        $_SESSION['s_dec'] = $_POST['s-dec'];
    }

    //post tag error
    if(empty($_POST['tags'])) {
        $tagerr = 'Please enter minimum 1 tag';
        $_SESSION['tagerr'] = $tagerr;
        header('location:../blog-admin/admin.php#addposttab');
    }

    else if((preg_match('/[\^><>]/', $_POST['tags']))) {
        $tagerr = '\ ^ > < > are not allowed';
        $_SESSION['tagerr'] = $tagerr;
        $_SESSION['tags'] = $_POST['tags'];
        header('location:../blog-admin/admin.php#addposttab');
    }

    else {
        $tag = $_POST['tags'];
        $_SESSION['tags'] = $_POST['tags'];
    }

    if( $title != '' && $article != '' && $tag != '' && $s_dec != '') {
        //image error
        $image_info = $_FILES['image'];
        if(empty($image_info['name'])) {
            $title = mysqli_escape_string($dbconnect, $title);
            $article = mysqli_escape_string($dbconnect, $article);
            $s_dec = mysqli_escape_string($dbconnect, $s_dec);
            $tag = mysqli_escape_string($dbconnect, $tag);
            $insert_blog = "INSERT INTO posts (header, article, shortdec, tags, date) VALUES ('$title', '$article',  '$s_dec', '$tag', '$date')";
            $insert_blog_push = mysqli_query($dbconnect, $insert_blog);
            unset($_SESSION['title']);
            unset($_SESSION['article']);
            unset($_SESSION['s_dec']);
            unset($_SESSION['tags']);
            $_SESSION['post_success'] = 'Posted';
            header('location:../blog-admin/admin.php#addposttab');
        }

        else {
            $image_name_explode = explode('.', $image_info['name']);
            if($image_info['size'] < 2000000) {
                $title = mysqli_escape_string($dbconnect, $title);
                $article = mysqli_escape_string($dbconnect, $article);
                $s_dec = mysqli_escape_string($dbconnect, $s_dec);
                $tag = mysqli_escape_string($dbconnect, $tag);
                 $insert_blog = "INSERT INTO posts (header, article, shortdec, tags, date) VALUES ('$title', '$article', '$s_dec', '$tag', '$date')";
                $insert_blog_push = mysqli_query($dbconnect, $insert_blog);
                $post_id = mysqli_insert_id($dbconnect);
                $file_name = $post_id . '.' . end($image_name_explode);
                if(file_exists($file_name)) {
                    $new_file_name = $post_id . 'new.' . end($image_name_explode);
                    $new_location = '../blog-admin/images/' . $new_file_name;
                    move_uploaded_file($image_info['tmp_name'], $new_location);
    
                    $update_post = "UPDATE posts SET image = '$new_file_name' WHERE id = '$post_id'"; 
                    $update_post_push = mysqli_query($dbconnect, $update_post);
                }

                else {
                    $new_location = '../blog-admin/images/' . $file_name;
                    move_uploaded_file($image_info['tmp_name'], $new_location);

                    $update_post = "UPDATE posts SET image = '$file_name' WHERE id = '$post_id'"; 
                    $update_post_push = mysqli_query($dbconnect, $update_post);
                }
                

                    $_SESSION['post_success'] = 'Posted';
                    unset($_SESSION['title']);
                    unset($_SESSION['article']);
                    unset($_SESSION['s_dec']);
                    unset($_SESSION['tags']);
                    header('location:../blog-admin/admin.php#addposttab');
            }

            else {
                $imageerr = 'Please select an image with max 2 MB file size';
                $_SESSION['imageerr'] = $imageerr;
                header('location:../blog-admin/admin.php#addposttab');
            }
        }
    }



}

?>