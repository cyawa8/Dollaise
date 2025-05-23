<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
<form method="post" action="addproduct.php">
    <div class="container">
    <div class="form-group">
            <label for="exampleInputText1">Product Name</label>
            <input type="text" name="productname" class="form-control" id="exampleInputText1" required>
    </div>
   
    <div class="form-group">
            <label for="exampleInputnumber1">Stock</label>
            <input type="number" name="stock" class="form-control" id="exampleInputnumber1" required>
    </div>

    <div class="form-group">
        <div class="">
                <label for="exampleInputnumber2">Price</label>
                <input type="number" name="price" class="form-control" id="exampleInputnumber2" required>
        </div>
        <!--<div class="col-6">
                <label for="exampleInputnumber2">Discount</label>
                <div class="input-group-prepend">
                    <input type="number" class="form-control" id="exampleInputnumber2"><span class="input-group-text">%</span>
                </div>  
        </div>-->  
    </div>
    
    <button type="submit" class="btn btn-primary">ADD</button>
    </div> 
</form>

<div class="container" style="padding-top:50px">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Stock</th>
        <th>Price</th>
        <th>Action</th>
        </tr>
    </thead>


    <tbody>
        <?php 
            $sql = "SELECT * FROM `tb_produk` WHERE 1";
            $result = $conn->query($sql);
                if ($result->num_rows > 0)  
                {
                    while($row = $result->fetch_assoc()) 
                    {
                        $prd_id = $row['product_id'];
                        $name = $row['product_name'];
                        $stock = $row['product_stock'];
                        $price = $row['product_price'];
                        print("<tr>");
                        printf('<td>%s</td>',$prd_id);
                        printf('<td>%s</td>',$name);
                        printf('<td>%s</td>',$stock);
                        printf('<td>%s</td>',$price);
                        printf('<td><a href="updateproduct.php?product_id=%s"><b>UPDATE</b></a> | <a href="deleteproduct.php?product_id=%s"><b>DELETE</b></a></td>',$prd_id,$prd_id);
                        print("</tr>");
                    }
                }
            ?>
    </tbody>
    </table>
</div>
</body>
</html>