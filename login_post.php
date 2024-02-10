<?php
session_start();
require_once 'db.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $checking_query = "SELECT COUNT(*) AS user_total FROM users WHERE email = '$email' AND password = '$password'";
    $from_db = mysqli_query($db_connect , $checking_query);
    $after_assoc = mysqli_fetch_assoc($from_db);
   
    
    if($after_assoc['user_total'] == 1)
    {
        
        $_SESSION['user_status'] = "yes";
        $_SESSION['user_email'] = $email;

        header("location: admin/dashboard.php");
    }
    else
    {
        $_SESSION['login_err'] = "your email or password is wrong";
        header("location: login.php");
        
    }
    
?>