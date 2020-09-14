<?php
    include '../../database/config.php';

    $id = $_GET['id'];
    $sql = "UPDATE user SET role='guru' WHERE id=$id";
    
    if ($koneksi->query($sql) === TRUE) {
      echo "Record updated successfully";
      header("location:index.php?pesan=berhasil");

    } else {
      echo "Error updating record: " . $koneksi->error;
      header("location:index.php?pesan=update_gagal");

    }
    
?>