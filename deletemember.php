<?php
    include 'connection.php';


    if(isset($_GET['member_id'])){
        $id = $_GET['member_id'];
        $query = mysqli_query($conn, "SELECT * FROM tb_member WHERE member_id='$id' ") or die(mysqli_error($conn));


    if(mysqli_num_rows($query) > 0){
        $del = mysqli_query($conn, "DELETE FROM tb_member WHERE member_id='$id'") or die(mysqli_error($conn));
        if($del){
            echo '<script>alert("Berhasil menghapus data."); document.location="member.php;</script>';
            header('Location: member.php');
        }else{
            echo '<script>alert("Gagal menghapus data."); document.location="member.php";</script>';
            header('Location: member.php');
        }
    }
}
?>