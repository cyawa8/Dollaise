<?php
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>
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

    <div class="container" style="margin-top:10px">
        <div class="head" style="text-align:center">
            <h2>Dolliase</h2>
            <h3>Jl.Angin sejuk no28 rt15/rw02, Cilincing jakarta Utara</h3>
        </div>
    <hr>
    
   <p>Date:&nbsp;<td><?php echo date('l, d-m-Y  h:i:s a'); ?></td></p>
    
    <p id="demo"></p>


        <div class="container" style="padding-top:50px">
            <table class="table">
                
                <thead class="thead-dark">
                    <tr>
                    <th>List</th>
                    <th>Amount</th>
                    <th>Price</th>
                    </tr>
                </thead>

                    <tbody>
                        <?php
                            $sql = "SELECT * FROM `tb_transaksipenjualan` WHERE 1";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0)  
                            {
                                while($row = $result->fetch_assoc()) 
                                {
                                    $pid = $row['product_id']; 
                                    $amount = $row['sell_amount'];
                                    $price = $row['sell_price'];
                        ?>
                            <tr>
                            <td><?php echo $pid?></td>
                            <td><?php echo $amount?></td>
                            <td><?php echo $price?></td>
                            </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                    
            </table>
            <div class="yaudahlahya" style="text-align:right">
                <p>Pay: <?php echo $_POST["pay"] ?></p>
                <p>Change: &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST["change"] ?></p>
            </div>

        </div>
    
    <br>
    <br>
    <br>
    <hr>
    </div>
    <h6 style="text-align:center">Terima Kasih Telah Berbelanja</h6>

</body>
</html>