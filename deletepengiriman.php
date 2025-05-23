<?php
    include 'connection.php';


    if(isset($_GET['id_pengiriman'])){
        $id = $_GET['id_pengiriman'];
        $query = mysqli_query($conn, "SELECT * FROM tb_pengiriman WHERE id_pengiriman='$id' ") or die(mysqli_error($conn));


    if(mysqli_num_rows($query) > 0){
        $del = mysqli_query($conn, "DELETE FROM tb_pengiriman WHERE id_pengiriman='$id'") or die(mysqli_error($conn));
        if($del){
            echo '<script>alert("Berhasil menghapus data."); document.location="pengiriman.php;</script>';
            header('Location: pengiriman.php');
        }else{
            echo '<script>alert("Gagal menghapus data."); document.location="pengiriman.php";</script>';
            header('Location: pengiriman.php');
        }
    }
}
?>