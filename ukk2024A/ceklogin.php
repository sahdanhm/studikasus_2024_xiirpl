<?php 
session_start();
include 'config/koneksi.php';
$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];
$login = mysqli_query($konek,"select * from petugas where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		$_SESSION['level'] = "admin";
		header("location:paneladmin/index.php");
	}else if($data['level']=="kasir"){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		$_SESSION['level'] = "kasir";
		header("location:");}	
}else{
	header("location:login.php?pesan=gagal");
} ?>