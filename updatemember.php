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
    $member_id = $_GET['member_id'];
		if ($member_id)
		{
		   $sSQL="SELECT * FROM `tb_member` WHERE member_id ='$member_id' limit 1";
		   $recordset = mysqli_query($conn,$sSQL);
           if (mysqli_num_rows($recordset))
		   {
		    $row=mysqli_fetch_array($recordset);
                $member_id = $row['member_id'];
                $first_name = $row['member_fname'];
                $last_name = $row['member_lname'];
                $address = $row['member_address'];
                $contact = $row['member_date'];
                $email= $row['member_email'];		   
		   }		      
	 	}
	?>	 

   <form action="applyupdatemem.php" method="post">

   <div class="form-group">
    <label for="email">ID</label>
    <input type="email" readonly class="form-control" placeholder="ID" id="id" name="member_id" value="<?php echo $member_id?>">
  </div>

    <div class="form-group">
    <label for="first_name">First Name</label> 
    <input type="text" class="form-control" placeholder="Enter your first name" id="first_name" name="first_name">
  	</div>
  
    <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" placeholder="Enter your last name" id="last_name" name="last_name" >
  	</div>

    <div class="form-date" style="margin:2% 0%;">
    <label for="exampleInputDate1">Join Date</label>
    <input type="date" id="datemin" name="datemin" name='date' min="1500-01-02" class="form-control">
    </div>

    <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
    </div>
    
    <div class="form-group">
    <label for="last_name">Address</label>
    <input type="text" class="form-control" placeholder="Enter your address" id="address" name="address" >
  	</div>


   <a><button type="submit" class="btn btn-primary" name="simpan">Submit</button><a>
</form> 
  
  
</div>

</body>
</html>
