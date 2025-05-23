<?php 

	include "connection.php";  
	
	if (isset($_POST))
	{
	  $first_name = $_POST['first_name'];
	  $last_name = $_POST['last_name'];
	  $alamat = $_POST['address'];
	  $contact = $_POST['contact'];
    $email = $_POST['email'];
    $supplier_id = $_POST['supplier_id'];
	  
	
	  
	  $sSQL="UPDATE 
      `tb_supplier` SET 
      `supplier_fname`='$first_name',
      `supplier_lname`='$last_name',
      `supplier_address`='$alamat',
      `supplier_nohp`='$contact',
      `supplier_email`='$email' WHERE 
      `supplier_id`='$supplier_id'";
	  $x = mysqli_query($conn,$sSQL);
    /* 
    if (mysqli_query($conn,$sSQL))
	  {
	     header("updatesupplier.php");

	  }
	  else 
	     die($sSQL);
       */
	  header('Location: supplier.php');
	}
	
	  
?>