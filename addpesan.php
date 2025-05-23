<?php
    include 'connection.php';
    if(isset($_POST)){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $m = "INSERT INTO `tb_pesan`( `pesan`, `email`, `name`) VALUES ('$message','$email','$name')";
        mysqli_query($conn,$m);
        echo "<script>alert('Pesan Telah Terkirim')</script>";
        header('Location: contact.php');
    }
    else{
        echo "<script>alert('Pesan Gagal')</script>";
        header('Location: contact.php');
    }
?>