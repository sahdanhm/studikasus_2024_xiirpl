<?php
include '../config/koneksi.php';
session_start();
if(isset($_POST['btambah'])){
	$idproduk=$_POST['produk'];
	$jumlah=$_POST['txtjumlah'];
	$data=mysqli_query($konek,"select*from produk where idproduk='$idproduk'");
	$row=mysqli_fetch_assoc($data);
	$produk=[
		'id'=>$row['idproduk'],
		'nama'=>$row['namaproduk'],
		'harga'=>$row['hargaproduk'],
		'qty'=>$jumlah
		];

		$_SESSION['cart'][]=$produk;
		
		header("location:index.php?link=kasir");
}

?>