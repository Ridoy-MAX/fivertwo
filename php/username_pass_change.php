<?php

session_start();
require('db.php');

$get_info = 'SELECT * FROM users';
$run_get_info = mysqli_query($dbconnect, $get_info);


$olduser = $newuser = $oldpass = $newpass = $confirmpss = '';

$oldusererr = $newusererr = $oldpasserr = $newpasserr = $confirmpasserr = '';

if($_SERVER['REQUEST_METHOD'] == "POST") {

    //old username validation
    if(empty($_POST['old_username'])) {
        $oldusererr = 'Please enter your Old Username';
        $_SESSION['oldusererr'] = $oldusererr;
        header('location:../admin_login.php#passchangemodal');
    }

    else if(!empty($_POST['old_pass'])) {
        foreach($run_get_info as $value) {
            if($value['username'] == $_POST['old_username']) {
                $olduser = $_POST['old_username'];
            }

            $_SESSION['oldusername'] = $_POST['old_username'];
        }

        if($olduser =='') {
            $oldusererr = 'Old Username or Password is not matching';
            $_SESSION['oldusererr'] = $oldusererr;
            $_SESSION['oldusername'] = $_POST['old_username'];
            $oldpasserr = 'Old Username or Password is not matching';
            $_SESSION['oldpasserr'] = $oldpasserr;
            header('location:../admin_login.php#passchangemodal');
        }
    }

    else {
        $_SESSION['oldusername'] = $_POST['old_username'];
    }

    //old password validation
    if(empty($_POST['old_pass'])) {
        $oldpasserr = 'Please enter your Old Password';
        $_SESSION['oldpasserr'] = $oldpasserr;
        header('location:../admin_login.php#passchangemodal');
    }

    else if(!empty($_POST['old_username'])) {
        foreach($run_get_info as $value) {
            if(password_verify($_POST['old_pass'], $value['password']) && $olduser == $value['username']) {
                $oldpass = $_POST['old_pass'];
            }
        }

        if($oldpass =='') {
            $oldpasserr = 'Old Username or Password is not matching';
            $_SESSION['oldpasserr'] = $oldpasserr;
            $oldusererr = 'Old Username or Password is not matching';
            $_SESSION['oldusererr'] = $oldusererr;
            header('location:../admin_login.php#passchangemodal');
        }
    }

    //New username validation
    if(empty($_POST['new_username'])) {
        $newusererr = 'Please enter a New Username';
        $_SESSION['newusererr'] = $newusererr;
        header('location:../admin_login.php#passchangemodal');
    }

    else if((preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬ -]/', $_POST['new_username'])) || (preg_match('/[A-Z]/', $_POST['new_username'])) ) {
        $newusererr = 'You can only use small Letters and numeric Numbers';
        $_SESSION['newusererr'] = $newusererr;
        $_SESSION['newuser'] = $_POST['new_username'];
        header('location:../admin_login.php#passchangemodal');
    }

    else {
        $newuser = $_POST['new_username'];
        $_SESSION['newuser'] = $_POST['new_username'];
    }

    //New password validation
    if(empty($_POST['new_password'])) {
        $newpasserr = 'Please enter a New Password';
        $_SESSION['newpasserr'] = $newpasserr;
        header('location:../admin_login.php#passchangemodal');
    }

    else if (strlen($_POST['new_password']) >= 8 && preg_match('/^.*[A-Z].*[A-Z].*$/',$_POST['new_password']) && preg_match('/^.*[a-z].*[a-z].*$/', $_POST['new_password']) && !(preg_match('/\s/', $_POST['new_password']))) {
        $newpass = $_POST['new_password'];
    }

    else {
        $newpasserr = 'Password must contain 8 characters with 2 Capital letters and 2 Small letters and no Space';
        $_SESSION['newpasserr'] = $newpasserr;
        header('location:../admin_login.php#passchangemodal');
    }

    //confimr password validation
    if(empty($_POST['confirm_new_password'])) {
        $confirmpasserr = 'Please confirm your New Password';
        $_SESSION['confirmpasserr'] = $confirmpasserr;
        header('location:../admin_login.php#passchangemodal');
    }

    else if ($_POST['confirm_new_password'] != $_POST['new_password']) {
        $confirmpasserr = 'New password is not matching';
        $_SESSION['confirmpasserr'] = $confirmpasserr;
        header('location:../admin_login.php#passchangemodal');
    }

    else {
        $confirmpss = $_POST['confirm_new_password'];
    }
}

else {
    echo 'This site collects user information by POST method. Please don\'t try to submit information in GET method. It is insecure for your site. Thanks';
} 


if($olduser != '' && $newuser != '' && $oldpass != '' && $newpass != '' && $confirmpss != '') {
    $newpass = password_hash($newpass, PASSWORD_DEFAULT);
    $change_info = "UPDATE users SET username='$newuser', password='$newpass' WHERE username='$olduser'";
    $runchangeinfo = mysqli_query($dbconnect, $change_info);

    if($runchangeinfo) {
        $_SESSION['success'] = 'Password Changed';
        header('location:../admin_login.php#passchangemodal');
    }
    else {
        $_SESSION['error'] = 'Something Error';
        header('location:../admin_login.php#passchangemodal');
    }
}

?>