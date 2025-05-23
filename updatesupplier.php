<?php
include 'connection.php';
if(isset($_GET)!=true){
header("location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DOLLAISE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>




<div class="container">
  <h2 class="text-center">UPDATE SUPPLIER</h2>

  <?php
    $supplier_id = $_GET['supplier_id'];
		if ($supplier_id)
		{
		   $sSQL="SELECT * FROM `tb_supplier` WHERE supplier_id ='$supplier_id' limit 1";
		   $recordset = mysqli_query($conn,$sSQL);
           if (mysqli_num_rows($recordset))
		   {
		    $row=mysqli_fetch_array($recordset);
			   $supplier_id = $row['supplier_id'];
			   $first_name = $row['supplier_fname'];
			   $last_name = $row['supplier_lname'];
         $address = $row['supplier_address'];
         $contact = $row['supplier_nohp'];
			   $email= $row['supplier_email'];		   
		   }		      
	 	}
	?>	 

   <form action="applyupdatesupp.php" method="post">

   <div class="form-group">
    <label for="email">ID</label>
    <input type="email" readonly class="form-control" placeholder="ID" id="id" name="supplier_id" value="<?php echo $supplier_id?>">
  </div>

    <div class="form-group">
    <label for="first_name">First Name</label> 
    <input type="text" class="form-control" placeholder="Enter your first name" id="first_name" name="first_name">
  	</div>
  
    <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" placeholder="Enter your last name" id="last_name" name="last_name" >
  	</div>

    <div class="form-group">
    <label for="last_name">Address</label>
    <input type="text" class="form-control" placeholder="Enter your address" id="address" name="address" >
  	</div>
   
    <div class="form-group">
    <label for="last_name">Contact</label>
    <input type="text" class="form-control" placeholder="Enter your number" id="contact" name="contact" >
  	</div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
  </div>
  



   <a><button type="submit" class="btn btn-primary" name="simpan">Submit</button><a>
</form> 
  
  
</div>

</body>
</html>
