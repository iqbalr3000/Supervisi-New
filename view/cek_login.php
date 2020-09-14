<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../database/config.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['role']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard admin
		header("location:admin/dashboard.php");
 
	// cek jika user login sebagai kurikulum
	}else if($data['role']=="kurikulum"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "kurikulum";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard kurikulum
		header("location:kurikulum/index.php");
 
	// cek jika user login sebagai supervisi
	}else if($data['role']=="supervisor"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "supervisor";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard supervisi
		header("location:supervisi/index.php");
 
	// cek jika user login sebagai guru
	}else if($data['role']=="guru"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "guru";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard guru
		header("location:guru/index.php");
 
	// cek jika user login sebagai kepala_sekolah
	}else if($data['role']=="kepsek"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "kepsek";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard kepala_sekolah
		header("location:kepala_sekolah/index.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>