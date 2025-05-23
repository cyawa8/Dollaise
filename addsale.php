<?php
    include 'connection.php';
    if(isset($_POST)){
        $date = date("Y-m-d");
        $amount = $_POST["amount"];
        $pid = $_POST["pid"];
        $price = $_POST["price"];
        $total = $_POST["total"];
        $member = $_POST["memid"];
        $price = mysqli_query($conn,"SELECT product_price FROM `tb_produk` WHERE `product_id`='$pid'");//GET HARGA dari tbproduk
        if(mysqli_num_rows($price)>0){//cek apakah ada se-enggak nya lebih dari 0 row , kalo gak ada gak ngapa2in
            while($dg = mysqli_fetch_assoc($price)){//mulai ngambil data
                $harg = $dg["product_price"];//jadi variable
            }
        }
        $sl = "INSERT INTO tb_transaksipenjualan(sell_date, product_id, sell_amount, sell_price, sell_total,member_id) VALUES ('$date','$pid','$amount','$harg','$total','$member')";//Harga dan variable lain yang tadi dah di assign di atas sblmnya
    /*$qx = */mysqli_query($conn,$sl);//akhirnya di jalanin
    //echo $sl;
        //echo $sl;
        //echo $qx ;

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
        $currBitch=$intj - intval($amount);
        $updateThisShitMF = "UPDATE tb_produk 
        SET stock='$currBitch' WHERE product_id='$pid'";
        mysqli_query($conn,$updateThisShitMF);
        header('Location: sale.php');
    }
    else{
        header('Location: sale.php');
    }
?>