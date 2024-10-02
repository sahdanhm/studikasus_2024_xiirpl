<?php 
include("../config/koneksi.php");
session_start();
$jml = $_POST['qty'];

foreach($_SESSION['krj'] as $key => $value) {
    $_SESSION['krj'][$key]['qty'] = $jml[$key];
}
header('location:index.php?link=kasir');