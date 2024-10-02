<?php
include "../config/koneksi.php";
$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];
$login = mysqli_query($koneks, "select*from petugas where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);
	if ($data['level'] == "admin") {
		session_start();
		$_SESSION['user'] = $username;
		$_SESSION['status'] = "login";
		$_SESSION['level'] = "admin";
		header("location:../content");
	} elseif ($data['level'] == "kasir") {
		session_start();
		$_SESSION['user'] = $username;
		$_SESSION['status'] = "login";
		$_SESSION['level'] = "kasir";
		header("location:../content/index.php?link=transaction");
	} else {
		header("location:index.php?pesan=gagal");
	}
} else {

	header("location:index.php?pesan=gagal");
	//echo "<meta http-equiv='refresh' content='2;url=index.php'>";

}

