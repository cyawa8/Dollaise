<?php
session_start();
include 'connection.php';
$njim = $_POST['email'];
$njim2 = $_POST['password'];
$sql="";
$sql="SELECT * FROM tb_user WHERE user_email='$njim' && user_password='$njim2'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
      {
        $row=mysqli_fetch_assoc($result);
        if($njim2 === $row['user_password']){
            $njim3=$row['user_password'];
            $username = $row['user_fname']." ".$row["user_fname"];
            $_SESSION['username'] = $username;
            $_SESSION['id']=$row["user_id"];
            $_SESSION['email']=$row["user_email"];
            $_SESSION['isloggedin']=1;

            header("location: dashboard.php");
        }
        else
        {
            echo "<script><alert> tidak sesuai </alert></script>";
        }
        
      }
      else
      {
        echo '<script>alert("Akun pengguna tidak ditemukan")</script>';
        echo '<script>window.location.assign("login.php");</script>';
      }
      
?>