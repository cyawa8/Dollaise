<?php
include 'connection.php';
$del = "DELETE FROM `tb_transaksipenjualan` WHERE 1";
mysqli_query($conn,$del);

header('location: sale.php');
?>
