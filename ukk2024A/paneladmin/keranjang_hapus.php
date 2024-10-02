<?php
include '../config/koneksi.php';
session_start();
$id=$_GET['id'];
$cart=$_SESSION['cart'];
$keranjang=array_filter($cart,function($var)use($id){
	return ($var['id']==$id);
});
//print_r($keranjang);
foreach($keranjang as $key =>$value){
	unset($_SESSION['cart'][$key]);
}
$_SESSION['cart']=array_values($_SESSION['cart']);
header('location:index.php?link=kasir');
?>