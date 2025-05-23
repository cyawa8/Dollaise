<?php
    include 'connection.php';


    if(isset($_GET['pretur_id'])){
        $id = $_GET['pretur_id'];
        $query = mysqli_query($conn, "SELECT * FROM tb_returpembelian WHERE pretur_id='$id' ") or die(mysqli_error($conn));


    if(mysqli_num_rows($query) > 0){
        $del = mysqli_query($conn, "DELETE FROM tb_returpembelian WHERE pretur_id='$id'") or die(mysqli_error($conn));
        if($del){
            echo '<script>alert("Berhasil menghapus data."); document.location="returpurchase.php;</script>';
            header('Location: returpurchase.php');
        }else{
            echo '<script>alert("Gagal menghapus data."); document.location="returpurchase.php";</script>';
            header('Location: returpurchase.php');
        }
    }
}
?>