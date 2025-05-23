<?php
    include 'connection.php';


    if(isset($_GET['sell_id'])){
        $id = $_GET['sell_id'];
        $query = mysqli_query($conn, "SELECT * FROM tb_transaksipenjualan WHERE sell_id='$id' ") or die(mysqli_error($conn));


    if(mysqli_num_rows($query) > 0){
        $del = mysqli_query($conn, "DELETE FROM tb_transaksipenjualan WHERE sell_id='$id'") or die(mysqli_error($conn));
        if($del){
            echo '<script>alert("Berhasil menghapus data."); document.location="sale.php;</script>';
            header('Location: sale.php');
        }else{
            echo '<script>alert("Gagal menghapus data."); document.location="sale.php";</script>';
            header('Location: sale.php');
        }
    }
}
?>