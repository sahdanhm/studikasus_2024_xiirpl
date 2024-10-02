<?php
include("../config/koneksi.php");
session_start();
if (isset($_POST['btambah'])) {
    $idproduk = $_POST['produk'];
    $jml = $_POST['jml'];
    $qry = mysqli_query($koneks, "select * from produk where idproduk='$idproduk'");
    $row = mysqli_fetch_assoc($qry);
    $produk = [
        'id' => $row['idproduk'],
        'name' => $row['namaproduk'],
        'price' => $row['hargaproduk'],
        'qty' => $jml,
    ];
    $_SESSION['krj'][] = $produk;
    header('location:index.php?link=transaction');
}
