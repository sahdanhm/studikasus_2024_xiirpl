<?php
include '../config/koneksi.php';
session_start();
$jumlah=$_POST['qty'];

foreach($_SESSION['cart']as $key => $value){
	$_SESSION['cart'][$key]['qty']=$jumlah[$key];
}
header('location:index.php?link=kasir');
?>