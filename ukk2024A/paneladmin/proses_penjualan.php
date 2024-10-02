<?php
include '../config/koneksi.php';
session_start();

$faktur=$_POST['txtfaktur'];
$idpel=$_POST['idpel'];
$total=$_POST['txttotal'];

//input data ke tabel penjualan
mysqli_query($konek,"insert into penjualan values('$faktur',now(),'$total','$idpel')");

//input data ke tabel detailpenjualan
foreach($_SESSION['cart'] as $key => $value){
	$idproduk=$value['id'];
	$hrg=$value['harga'];
	$jml=$value['qty'];
	$subtotal=$hrg*$jml;

mysqli_query($konek,"insert into detailpenjualan values('','$faktur','$idproduk','$jml','$subtotal')");
}
$_SESSION['cart']=[];
header("location:index.php?link=faktur&idjual=".$faktur);
?>