<?php
    include 'connection.php';


    if(isset($_GET['supplier_id'])){
        $id = $_GET['supplier_id'];
        $query = mysqli_query($conn, "SELECT * FROM tb_supplier WHERE supplier_id='$id' ") or die(mysqli_error($conn));


    if(mysqli_num_rows($query) > 0){
        $del = mysqli_query($conn, "DELETE FROM tb_supplier WHERE supplier_id='$id'") or die(mysqli_error($conn));
        if($del){
            echo '<script>alert("Berhasil menghapus data."); document.location="supplier.php;</script>';
            header('Location: supplier.php');
        }else{
            echo '<script>alert("Gagal menghapus data."); document.location="login.php";</script>';
            header('Location: supplier.php');
        }
    }
}
?>