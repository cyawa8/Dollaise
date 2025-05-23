<?php
include 'connection.php';
if(isset($_GET)!=true){
header("location: member.php");
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
    $product_id = $_GET['product_id'];
		if ($product_id)
		{
		   $sSQL="SELECT * FROM `tb_produk` WHERE product_id ='$product_id' limit 1";
		   $recordset = mysqli_query($conn,$sSQL);
           if (mysqli_num_rows($recordset))
		   {
		    $row=mysqli_fetch_array($recordset);
                $product_id = $row['product_id'];
                $product_name = $row['product_name'];
                $product_stock = $row['product_stock'];
                $product_price = $row['product_price'];		   
		   }		      
	 	}
	?>	 

   <form action="applyupdateprd.php" method="post">

   <div class="container">

   <div class="form-group">
    <label for="email">ID</label>
    <input type="email" readonly class="form-control" placeholder="ID" id="id" name="product_id" value="<?php echo $product_id?>">
    </div>

    <div class="form-group">
            <label for="exampleInputText1">Product Name</label>
            <input type="text" name="product_name" class="form-control" id="exampleInputText1" required>
    </div>
   
    <div class="form-group">
            <label for="exampleInputnumber1">Stock</label>
            <input type="number" name="product_stock" class="form-control" id="exampleInputnumber1" required>
    </div>

    <div class="form-group">
        <div class="">
                <label for="exampleInputnumber2">Price</label>
                <input type="number" name="product_price" class="form-control" id="exampleInputnumber2" required>
        </div>
        <!--<div class="col-6">
                <label for="exampleInputnumber2">Discount</label>
                <div class="input-group-prepend">
                    <input type="number" class="form-control" id="exampleInputnumber2"><span class="input-group-text">%</span>
                </div>  
        </div>-->  
    </div>
    
    <button type="submit" class="btn btn-primary">UPDATE</button>
    </div> 
</form> 
  
  
</div>

</body>
</html>
