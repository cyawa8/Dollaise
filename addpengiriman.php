<?php
    include 'connection.php';
    if(isset($_POST)){
        $pengirim = $_POST["pengirim"];
        $scontact = $_POST["scontact"];
        $penerima = $_POST["penerima"];
        $rcontact = $_POST["rcontact"];
        $kirim = "INSERT INTO `tb_pengiriman`(`nama_pengirim`, `kontak_pengirim`, `nama_penerima`, `kontak_penerima`) VALUES ('$pengirim','$scontact','$penerima','$rcontact')";
        mysqli_query($conn, $kirim);
        header('Location: pengiriman.php');
    }else{
        header('Location: pengiriman.php');
    }
?>