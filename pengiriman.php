<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengiriman</title>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale Transaction</title>
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
    <body>
<form action="addpengiriman.php" method="post">
    <div class="container">

    <div class="form-date" style="margin:2% 0%;">
        <label for="exampleInputtext1">Sender</label>
        <input type="text" name="pengirim" class="form-control" id="exampleInputtext1" required> 
    </div>

    <div class="form-group">
        <label for="exampleInputNumber1">Contact</label>
        <input type="number" name="scontact" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="exampleInputtext2">Receiver</label>
        <input type="text" name="penerima" class="form-control" id="exampleInputtext2" required>
    </div> 

    <div class="form-group">
        <label for="penerima">Contact</label>
        <input type="number" name="rcontact" class="form-control" required>
    </div>

          <button type="submit" name='btnsubmit' class="btn btn-primary">ADD</button>
    </div> 
    
</form>
<div class="container" style="padding-top:50px">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th>Shipping ID</th>
        <th>Sender</th>
        <th>Sender Contact</th>
        <th>Receiver</th>
        <th>Receiver Contact</th>
        <th>Action</th>
        </tr>
    </thead>


    <tbody>
        <?php
            $sql = "SELECT * FROM `tb_pengiriman` WHERE 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0)  
            {
                while($row = $result->fetch_assoc()) 
                {
                    $ID = $row['id_pengiriman'];
                    $sname = $row['nama_pengirim'];
                    $rname = $row['nama_penerima'];
                    $scontact = $row['kontak_pengirim'];
                    $rcontact = $row['kontak_penerima'];
                    print("<tr>");
                    printf('<td>%s</td>',$ID);
                    printf('<td>%s</td>',$sname);
                    printf('<td>%s</td>',$rname);
                    printf('<td>%s</td>',$scontact);
                    printf('<td>%s</td>',$rcontact);
                    printf('<td><a href="deletepengiriman.php?id_pengiriman=%s"><b>DELETE</b></a></td>',$ID,$ID);
                    print("</tr>");
                }
            }
        ?>
    </tbody>
    </table>
</div>
</body>
</html>