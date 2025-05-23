<?php
    include 'connection.php';


    if(isset($_GET['purchase_id'])){
        $id = $_GET['purchase_id'];
        $query = mysqli_query($conn, "SELECT * FROM tb_transaksipembelian WHERE purchase_id='$id'") or die(mysqli_error($conn));


    if(mysqli_num_rows($query) > 0){
        $del = mysqli_query($conn, "DELETE FROM tb_transaksipembelian WHERE purchase_id='$id'") or die(mysqli_error($conn));
        if($del){
            echo '<script>alert("Berhasil menghapus data."); document.location="purchase.php;</script>';
            header('Location: purchase.php');
        }else{
            echo '<script>alert("Gagal menghapus data."); document.location="purchase.php";</script>';
            header('Location: purchase.php');
        }
    }
}
?>