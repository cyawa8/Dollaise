<?php
    include 'connection.php';


    if(isset($_GET['sretur_id'])){
        $id = $_GET['sretur_id'];
        $query = mysqli_query($conn, "SELECT * FROM tb_returpenjualan WHERE sretur_id='$id' ") or die(mysqli_error($conn));


    if(mysqli_num_rows($query) > 0){
        $del = mysqli_query($conn, "DELETE FROM tb_returpenjualan WHERE sretur_id='$id'") or die(mysqli_error($conn));
        if($del){
            echo '<script>alert("Berhasil menghapus data."); document.location="retursale.php;</script>';
            header('Location: retursale.php');
        }else{
            echo '<script>alert("Gagal menghapus data."); document.location="retursale.php";</script>';
            header('Location: retursale.php');
        }
    }
}
?>