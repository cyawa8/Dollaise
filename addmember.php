<?php
include 'connection.php';
if (isset($_POST)) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $date = date("Y-m-d");
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $m = "INSERT INTO `tb_member`(`member_fname`, `member_lname`, `member_date`, `member_address`, `member_email`) VALUES ('$fname','$lname','$date','$alamat','$email')";
    mysqli_query($conn, $m);
    header('Location: member.php');
} else {
    echo "<script>alert('Data Sudah Ada')</script>";
    header('Location: member.php');
}
