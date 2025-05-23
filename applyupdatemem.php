<?php 

	include "connection.php";  
	
	if (isset($_POST))
	{
	  $first_name = $_POST['first_name'];
	  $last_name = $_POST['last_name'];
      $date = date("Y-m-d");
      $email = $_POST['email'];
	  $alamat = $_POST['address'];
      $member_id = $_POST['member_id'];
	  
	
	  
	  $sSQL="UPDATE 
      `tb_member` SET 
      `member_fname`='$first_name',
      `member_lname`='$last_name',
      `member_date`='$date',
      `member_email`='$email'
      `member_address`='$alamat' WHERE 
      `member_id`='$member_id'";
	  $x = mysqli_query($conn,$sSQL);
    /* 
    if (mysqli_query($conn,$sSQL))
	  {
	     header("updatesupplier.php");

	  }
	  else 
	     die($sSQL);
       */
      header('Location: member.php');
	}
	
	  
?>