<?php
include 'connection.php';
if(isset($_POST)){
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $alamat = $_POST["alamat"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $a = "INSERT INTO `tb_supplier`(`supplier_fname`, `supplier_lname`, `supplier_address`, `supplier_nohp`, `supplier_email`) VALUES ('$firstname','$lastname','$alamat','$contact','$email')";
    mysqli_query($conn,$a);
    header("dashboard.php");
}
else{
    echo "<script>alert('Data Sudah Ada')</script>";
}
?>