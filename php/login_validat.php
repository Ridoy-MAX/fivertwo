<?php
session_start();
require('db.php');

$get_info = 'SELECT * FROM users';
$get_all_info = mysqli_query($dbconnect, $get_info);

$username = $password='';
$usernameerr = $passsworderr = '';
$matched = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['username'])) {
        $usernameerr = 'Please enter your username';
        $_SESSION['usernameerr'] = $usernameerr;
        header('location:../admin_login.php');
    }

    else {
        $username = data_process($_POST['username']);
        $_SESSION['username'] = $username;
    }

    if(empty($_POST['password'])) {
        $passworderr = 'Please enter your password';
        $_SESSION['passworderr'] = $passworderr;
        header('location:../admin_login.php');
    }

    else {
        $password = $_POST['password'];
        $matched = check_validation($username, $password, $matched);
        if($matched == 'match_found') {
            $_SESSION['login_start'] = 'login start';
            header('location:../blog-admin/admin.php');
        }
        else {
            $_SESSION['passworderr'] = 'Password or Username error';
            header('location:../admin_login.php');
        }
    }

}

else {
    echo 'Request Method Error. Please Reload the login page and try to submit the information agian. If you found this error again. It is better to contact a developer. Thanks.';
}


function data_process($data) {
    $data = htmlspecialchars($data);
    return $data;
}


function check_validation($username, $password, $matched) {
    $all_db = $GLOBALS['get_all_info'];
    if(!(empty($username)) && !(empty($password))) {
        
        foreach($all_db as $value) {
            if($username == $value['username'] && (password_verify($password, $value['password']))) {
               $matched = 'match_found';
            } 
        }
    }
    return $matched;
}