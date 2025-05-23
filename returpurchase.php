<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retur Purchase</title>
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
<form method="post" action="addreturpurchase.php">
    <div class="container">

    <div class="form-date">
        <label for="exampleInputDate1">Retur Date</label>
        <input type="date" id="datemin" name="date" min="1500-01-02" class="form-control">
    </div>

    <div class="form-group">
        <label for="exampleInputNumber1">Product Name</label>
        <select name="pid" class="form-control" onchange="gantiha()" id="selectp">
                <?php 
                    $q ="SELECT * FROM `tb_produk` WHERE 1";
                    $run = mysqli_query($conn,$q);

                    if(mysqli_num_rows($run)){
                        while($get = mysqli_fetch_assoc($run)){
                            printf("<option value='%s'>%s</option>",$get["product_id"],$get["product_name"]);
                        }
                    }
                ?>
            </select>
    </div>

    <div class="form-group">
        <label for="exampleInputtext1">Amount</label>
        <input type="text" class="form-control" name='amount' required>
    </div>

    <div class="form-group">
        <label for="exampleInputNumber2">Price</label>
        <p  id="hargas">
        <select id="pha" name="price" class="form-control">
            <?php
            $pr = "SELECT * FROM `tb_produk` WHERE 1";
            $result = mysqli_query($conn,$pr);
                    if(mysqli_num_rows($result)>0){
                        while($d = mysqli_fetch_assoc($result)){
                            $id = $d["product_id"];
                            $harga = $d["product_price"];
                            //$name = $d["name"];
                            printf('<option value="%s">%s</option>',$id,$harga);
                        }
                    }       
            ?>
        </select>
        </p>
    </div>

    <button type="submit" name='btnsubmit' class="btn btn-primary">Retur</button>
    </div> 
</form>
<div class="container" style="padding-top:50px">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th>Retur ID</th>
        <th>Date</th>
        <th>Product ID</th>
        <th>Amount</th>
        <th>Price</th>
        <th>Action</th>
        </tr>
    </thead>


    <tbody>
        <?php
            $sql = "SELECT * FROM `tb_returpembelian` WHERE 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0)  
            {
                while($row = $result->fetch_assoc()) 
                { 
                    $returid = $row['pretur_id'];
                    $date = date("Y-m-d");
                    $pid = $row['product_id'];
                    $amount = $row['pretur_amount'];
                    $price = $row['pretur_price']; 
                    print("<tr>");
                    printf('<td>%s</td>',$returid);
                    printf('<td>%s</td>',$date);
                    printf('<td>%s</td>',$pid);
                    printf('<td>%s</td>',$amount);
                    printf('<td>%s</td>',$price);
                    printf('<td><a href="deletereturpurchase.php?pretur_id=%s"><b>DELETE</b></a></td>',$returid,$returid);
                    print("</tr>");
                }
            }
        ?>
    </tbody>
    </table>
</div>
</body>
<script>
    function gantiha(){
        var x = document.getElementById("selectp").value;

        document.getElementById("pha").value = x;

    }
</script>
</html>