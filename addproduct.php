<?php
    include 'connection.php';
    if(isset($_POST)){
        $pname = $_POST["productname"];
        $stock = $_POST["stock"];
        $price = $_POST["price"];
        $p = "INSERT INTO `tb_produk`(`product_name`, `product_stock`, `product_price`) VALUES ('$pname','$stock','$price')";
        mysqli_query($conn,$p);
       header('Location: product.php');
    }
    else{
        header('Location: product.php');
    }
?>