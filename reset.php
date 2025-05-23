<?php
    session_start();
    require_once "connection.php";
    $email = $_POST['email'];
    $sql="";
    $sql="select * from tb_user where user_email='$email' limit 1";
    $result = mysqli_query($conn, $sql);
        
    
    if (mysqli_num_rows($result) >0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $_SESSION['email']=$row['user_email'];
            header("location:repeatpw.php");
            
        }
    }
    else
    {
    echo '<script>alert("email pengguna tidak ditemukan")</script>';
    echo '<script>window.location.assign("forgot.php");</script>';
    }

?>