<?php
include "connection.php";
    if(isset($_POST)){
    $date = date("Y-m-d");
    $amount = $_POST["amount"];
    $pid = $_POST["pid"];
    $price = $_POST["price"];
    $price = mysqli_query($conn,"SELECT product_price FROM `tb_produk` WHERE `product_id`='$pid'");
        if(mysqli_num_rows($price)>0){
            while($dg = mysqli_fetch_assoc($price)){
                $harg = $dg["product_price"];
            }
        }
     $sl = "INSERT INTO tb_returpenjualan(`sretur_date`, `product_id`, `sretur_amount`, `sretur_price`) VALUES ('$date','$pid','$amount','$harg')";
    mysqli_query($conn,$sl);
    
    $rtr = mysqli_query($conn,"SELECT product_stock FROM tb_produk WHERE product_id='$pid'");
    if(mysqli_num_rows($rtr)>0){
        while($dg = mysqli_fetch_assoc($rtr)){
            $amnt = $dg["product_stock"];
        }
    }

    $thotslayer = "SELECT product_stock FROM tb_produk WHERE product_id='$pid'";
    $selra = mysqli_query($conn,$thotslayer);
    if(mysqli_num_rows($selra)>0){
while($getterr = mysqli_fetch_assoc($selra)){
$intj = intval($getterr["product_stock"]);
}
    }
    $currBitch=$intj + intval($amount);
    $updateThisShitMF = "UPDATE tb_produk 
    SET product_stock='$currBitch' WHERE product_id='$pid'";
    mysqli_query($conn,$updateThisShitMF);
    header('Location: retursale.php');
}
else{
//Disini ga ada apa2 karena gak ada skenario dimana method kesini GET ato apapun jadi ditaruhlah header biar ga ada penyusup
header('Location: retursale.php');
}
?>