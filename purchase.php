<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Purchase Transaction</title>
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
<form method="post" action="addpurchase.php">
    <div class="container">

    <div class="form-date" style="margin:2% 0%;">
        <label for="exampleInputDate1">Purchase Date</label>
        <input type="date" id="datemin" name="date" min="1500-01-02" class="form-control">
       
    </div>

    <div class="form-group">
        <label for="exampleInputText1">Supplier Name</label>
            <select name="supid" class="form-control">
                <?php 
                    $q ="SELECT * FROM tb_supplier WHERE 1";
                    $run = mysqli_query($conn,$q);

                    if(mysqli_num_rows($run)){
                        while($get = mysqli_fetch_assoc($run)){
                            $nama  = $get["supplier_fname"]." ".$get["supplier_lname"];
                            printf("<option value='%s'>%s</option>",$get["supplier_id"],$nama);
                        }
                    }
                ?>
            </select>
    </div>

    <div class="form-group">
            <label for="exampleInputText2">Product Name</label>
            <input type="text" name="pname" class="form-control" id="exampleInputText2" required>
    </div>

    <div class="form-group">
            <label for="exampleInputNumber1">Amount</label>
            <input type="number" name="amount" class="form-control" id="exampleInputNumber1"required>
    </div>

    <div class="form-group">
        <label for="exampleInputNumber2">Price</label>
        <input type="number" name="price" class="form-control" id="exampleInputNumber2" required>
    </div>
    
    <button type="submit" name='btnsubmit' class="btn btn-primary">ADD</button>
    </div> 
</form>
<div class="container" style="padding-top:50px">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th>Purchase ID</th>
        <th>Supplier ID</th>
        <th>Date</th>    
        <th>Product Name</th>
        <th>Amount</th>
        <th>Price</th>
        <th>Action</th>
        </tr>
    </thead>


    <tbody>
        <?php
            $sql = "SELECT * FROM tb_transaksipembelian WHERE 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0)  
            {
                while($row = $result->fetch_assoc()) 
                {
                    $pr_id = $row['purchase_id'];
                    $date = $row['purchase_date'];
                    $supid = $row['supplier_id'];
                    $name = $row['product_name'];
                    $amount = $row['purchase_amount'];
                    $price = $row['purchase_price'];
                    print("<tr>");
                    printf('<td>%s</td>',$pr_id);
                    printf('<td>%s</td>',$supid);
                    printf('<td>%s</td>',$date);
                    printf('<td>%s</td>',$name);
                    printf('<td>%s</td>',$amount);
                    printf('<td>%s</td>',$price);
                    printf('<td><a href="deletepurchase.php?purchase_id=%s"><b>DELETE</b></a></td>',$pr_id,$pr_id);
                    print("</tr>");
                }
            }
        ?>
    </tbody>
    </table>
</div>
</body>
</html>