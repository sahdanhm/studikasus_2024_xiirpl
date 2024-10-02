<?php
include("../config/koneksi.php");
session_start();

$fktr = $_POST['nofktr'];
$idpel = $_POST['idpel'];
$total = $_POST['total'];
$stat = $_POST['chg'];
if ($stat < 0) {
    $_SESSION['st'] = 'BELUM LUNAS';
} else {
    $_SESSION['st'] = 'LUNAS';
}


mysqli_query($koneks, "insert into penjualan values ('$fktr',now(),'$total','$idpel');");

foreach ($_SESSION["krj"] as $key => $value) {
    $idproduk = $value['id'];
    $hrg = $value['price'];
    $qty = $value['qty'];
    $subtotal = $hrg * $qty;

    mysqli_query($koneks, "insert into detailpenjualan values('','$fktr','$idproduk','$qty','$subtotal')");
}
$_SESSION['krj'] = [];
header("location:index.php?link=faktur&idjual=" . $fktr);