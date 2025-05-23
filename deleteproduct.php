<?php
    include 'connection.php';


    if(isset($_GET['product_id'])){
        $id = $_GET['product_id'];
        $query = mysqli_query($conn, "SELECT * FROM tb_produk WHERE product_id='$id' ") or die(mysqli_error($conn));


    if(mysqli_num_rows($query) > 0){
        $del = mysqli_query($conn, "DELETE FROM tb_produk WHERE product_id='$id'") or die(mysqli_error($conn));
        if($del){
            echo '<script>alert("Berhasil menghapus data."); document.location="product.php;</script>';
            header('Location: product.php');
        }else{
            echo '<script>alert("Gagal menghapus data."); document.location="product.php";</script>';
            header('Location: product.php');
        }
    }
}
?>