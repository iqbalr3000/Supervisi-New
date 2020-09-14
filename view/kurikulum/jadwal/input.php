<?php 
    include '../../../database/config.php';

    $tanggal = $_POST['tanggal'];
    $nama_guru = $_POST['nama_guru'];
    $mapel = $_POST['mapel'];
    $nama_file = $_POST['nama_file'];
    $supervisor = $_POST['supervisor'];
    
    mysqli_query($koneksi, "INSERT INTO jadwal VALUES(NULL,'$tanggal', '$nama_guru', '$mapel', '$nama_file', '$supervisor')");
    
    header("location:index.php?pesan=berhasil");
?>