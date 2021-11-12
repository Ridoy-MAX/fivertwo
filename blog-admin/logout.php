<?php
  session_start();
  if(!(isset($_SESSION['login_start']))) {
    header('location:../admin_login.php');
    die();
  }
    unset($_SESSION['login_start']);
    header('location:../admin_login.php');
?>