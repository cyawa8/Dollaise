<?php 
    session_start();
    include "connection.php";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $user_email = trim($_POST['user_email']);
        $user_passwords = (trim($_POST['password']));
        $repeat_password = (trim($_POST['repeat_password']));
        $sSQL="";
        if($_POST['password'] === $_POST['repeat_password'])
        {   
            $sSQL=" insert into tb_user (user_fname, user_lname, user_email, user_password) values ('$first_name','$last_name','$user_email','$user_passwords')";
      
            if (mysqli_query($conn,$sSQL))
            {
               header("location: index.php");
            }
            else 
            {
               die($sSQL);
            }  
        }
        else
        {
            echo "<script>alert('password tidak sama')</script>";
            echo '<script>window.location.assign("register.php");</script>';
        }
       
        
    }
?>