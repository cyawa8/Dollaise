<?php
    include 'connection.php';
    if(isset($_POST)){
        $date = date("Y-m-d");
        $supid = $_POST["supid"];
        $pname = $_POST["pname"];
        $amount = $_POST["amount"];
        $price = $_POST["price"];
        $pr = "INSERT INTO `tb_transaksipembelian`(`purchase_date`, `supplier_id`, `product_name`, `purchase_amount`, `purchase_price`) VALUES ('$date','$supid','$pname','$amount','$price')";
        mysqli_query($conn,$pr);        
        header('Location: purchase.php'); 
    }
    else{
        header('Location: purchase.php'); 
}
?>