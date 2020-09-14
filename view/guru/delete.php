<?php 
    include '../../database/config.php';
    
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM upload_file WHERE id='$id'");
 
    header("location:index.php?pesan=berhasil");
?>