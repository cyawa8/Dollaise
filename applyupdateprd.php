<?php 

	include "connection.php";  
	
	if (isset($_POST))
	{
	  $product_name = $_POST['product_name'];
	  $product_stock = $_POST['product_stock'];
      $product_price = $_POST['product_price'];
      $product_id = $_POST['product_id'];
	  
	
	  
	  $sSQL="UPDATE 
      `tb_produk` SET 
      `product_name`='$product_name',
      `product_stock`='$product_stock',
      `product_price`='$product_price' WHERE 
      `product_id`='$product_id'";
	  $x = mysqli_query($conn,$sSQL);
    /* 
    if (mysqli_query($conn,$sSQL))
	  {
	     header("updatesupplier.php");

	  }
	  else 
	     die($sSQL);
       */
      header('Location: product.php');
	}
	
	  
?>