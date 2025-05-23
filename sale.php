<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
    

<head>
<script>
        const list_sto = [];
        </script>
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
<form name = "tolol" action="addsale.php" method="post">
    <div class="container">

    <div class="form-date" style="margin:2% 0%;">
        <label for="exampleInputDate1">Sales Date</label>
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
        <?php
        $s = "SELECT `stock` FROM `tb_produk` WHERE";
        ?>
        <label for="exampleInputNumber1">Amount</label>
        <input type="number" name="amount" class="form-control" id="limitor">
    </div> 


    <!-- Taroh PHP disabled disini -->
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
                            $stock = intval($d["product_stock"]);
                            $idx = intval($id);
                            echo "<script>list_sto[$idx] = '$stock';</script>";
                            //$name = $d["name"];
                            printf('<option value="%s">%s</option>',$id,$harga);
                        }
                    }       
            ?>
        </select>
        </p>
    </div>


    <div class="form-group">
        <label>Total</label>
        <div class="row" >
                
                <div class="col-10">
                    <input id='hitungg' name='total' class="form-control"></input>
                </div>
                <div class="col">
                <button onclick="perhitungan(); return false;"  class="btn btn-primary mb-2">COUNT</button>
                        <script>
                            function perhitungan() {
                                const a = document.forms["tolol"]["amount"].value;
                                const placehold = document.getElementById("pha");
                                const b = placehold.options[placehold.selectedIndex].text;
                                console.log(b);
                                c = parseInt(a)*parseInt(b);
                                document.querySelector('#hitungg').value = c;
                            }
                        </script>
                </div>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleInputNumber1">Member ID</label>
        <select name="memid" class="form-control">
                <?php 
                    $q ="SELECT * FROM `tb_member` WHERE 1";
                    $run = mysqli_query($conn,$q);

                    if(mysqli_num_rows($run)){
                        while($get = mysqli_fetch_assoc($run)){
                            printf("<option value='%s'>%s</option>",$get["member_id"],$get["member_fname"]);
                        }
                    }
                ?>
            </select>
    </div>

        <button class="btn btn-primary">ADD</button>
    </div> 
    
</form>

<div class="container" style="padding-top:50px">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th>Sales ID</th>
        <th>Date</th>
        <th>Product ID</th>
        <th>Amount</th>
        <th>Price</th>
        <th>Total</th>
        <th>Action</th>
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
                    $sell_id = $row['sell_id'];
                    $date = $row['sell_date'];
                    $pid = $row['product_id'];
                    $amount = $row['sell_amount'];
                    $price = $row['sell_price'];
                    $total = $row['sell_total'];
                    print("<tr>");
                    printf('<td>%s</td>',$sell_id);
                    printf('<td>%s</td>',$date);
                    printf('<td>%s</td>',$pid);
                    printf('<td>%s</td>',$amount);
                    printf('<td>%s</td>',$price);
                    printf('<td>%s</td>',$total);
                    printf('<td><a href="deletesale.php?sell_id=%s"><b>DELETE</b></a></td>',$sell_id,$sell_id);
                    print("</tr>");
                }
            }
        ?>
    </tbody>
    </table>
    <button style="margin-bottom:15px" type="submit" class="btn btn-primary"><a href="clear.php" style="color: white; text-decoration: none">Clear</a></button>
</div>

<form method="post" name="lelah" action="printransaction.php">
    <div class="container">

    <div class="form-group">
        <label for="exampleInputNumber1">Member ID</label>
        <select name="memid1" class="form-control">
                <?php 
                    $q ="SELECT * FROM `tb_member` WHERE 1";
                    $run = mysqli_query($conn,$q);

                    if(mysqli_num_rows($run)){
                        while($get = mysqli_fetch_assoc($run)){
                            printf("<option value='%s'>%s</option>",$get["member_id"],$get["member_fname"]);
                        }
                    }
                ?>
            </select>
    </div>

    <div class="form-group">
        <label for="exampleInputNumber2">Total Price</label>
        <?php
           $totharga = "SELECT SUM(sell_total) AS total_harga FROM tb_transaksipenjualan";
           $qq = mysqli_query($conn,$totharga);
           $data = mysqli_fetch_array($qq);
           printf("<p name='totalprice' id='sas' class='form-control'>%s</p>",$data["total_harga"]);
        ?>
    </div>
    
    <div class="form-group">
        <label for="exampleInputNumber2">Pay</label>
        <input type="number" name="pay" class="form-control" id="exampleInputNumber2" required  >
    </div>

    <div class="form-group">
        <label for="exampleInputNumber2">Change</label>
        <div class="row">
            <div class="col">
                <input type="number" name="change" class="form-control" id="ea"></input>
            </div>
            <div class="col">
                    <button onclick="perhitungan2(); return false;"  class="btn btn-primary mb-2">COUNT</button>
                            <script>
                                function perhitungan2() {
                                    const a = document.forms["lelah"]["pay"].value;
                                    const b = document.getElementById('sas').textContent;
                                    console.log(b);
                                    c = parseInt(a)-parseInt(b);
                                    document.querySelector('#ea').value = c;
                                }
                            </script>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">PRINT</button>
    </div> 
</form>

</body>
<script>
    function gantiha(){
        var x = document.getElementById("selectp").value;
        var l = document.getElementById("limitor");
        console.log(x);
        console.log(l.value);
        //console.log(l.max);
        var as = x.toString();
        console.log(list_sto.length);
        l.value=1;
        l.max = list_sto[x];
        
        document.getElementById("pha").value = x;

    }
    $( document ).ready(function() {
        var az = document.getElementById("selectp").value;
        var l = document.getElementById("limitor");
        l.value=1;
        l.max = list_sto[az];
    });
</script>
</html>