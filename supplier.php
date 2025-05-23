<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suplier</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</head>
<body>
<form method="post" action="addsuplier.php">
    <div class="container">

    <div class="row">
        <div class="col-6">
            <label for="exampleInputText1">First Name</label>
            <input type="text" class="form-control" name="fname" required>
        </div>

        <div class="col-6">
            <label for="exampleInputText2">Last Name</label>
            <input type="text" class="form-control" name="lname" required>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleInputText5">Address</label>
        <input type="text" class="form-control" name="alamat" required>
    </div>

    <div class="form-group">
            <label for="exampleInputNumber1">Contact</label>
            <input type="number" class="form-control" name="contact" required>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" class="form-control" name="email" aria-describedby="emailHelp" required>
    </div>

    <button type="submit" name="btnsubmit" class="btn btn-primary">ADD</button>
    </div> 
</form>

<div class="container" style="padding-top:50px">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th>Supplier ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Action</th>
        </tr>
    </thead>


    <tbody>
        <?php
            $sql = "SELECT * FROM `tb_supplier` WHERE 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    $sup_id = $row['supplier_id'];
                    $lname = $row['supplier_lname'];
                    $fname = $row['supplier_fname'];
                    $name = $fname.' '.$lname;
                    $address = $row['supplier_address'];
                    $contact = $row['supplier_nohp'];
                    $email = $row['supplier_email'];
                    print("<tr>");
                    printf('<td>%s</td>',$sup_id);
                    printf('<td>%s</td>',$name);
                    printf('<td>%s</td>',$address);
                    printf('<td>%s</td>',$contact);
                    printf('<td>%s</td>',$email);
                    printf('<td><a href="updatesupplier.php?supplier_id=%s"><b>UPDATE</b></a> | <a href="deletesupplier.php?supplier_id=%s"><b>DELETE</b></a></td>',$sup_id,$sup_id);
                    print("</tr>");
                }
            }
        ?>
    </tbody>
    </table>
</div>
</body>
</html>