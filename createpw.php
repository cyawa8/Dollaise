<?php 
    session_start();
	include_once "connection.php";  
	if($_POST['password']===$_POST['repeat_password'])
	{
		if (isset($_POST['submit']))
		{
		$password = $_POST['password'];
		$botol=$_SESSION['email'];
		$sSQL="";
		$sSQL=  mysqli_query($conn, " update tb_user set user_password ='$password' where user_email = '$botol'") or die(header("location:forgot.php"));
		echo "<script>alert('Silahkan login ulang')</script>";
		header("location:index.php");
		}
	}
	else
	{
		echo "<script>alert('password tidak sama')</script>";
		echo '<script>window.location.assign("reset.php");</script>';
	}	  
?>