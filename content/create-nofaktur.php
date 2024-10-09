<?php 
$qry = mysqli_query($koneks, 'select max(idpenjualan) as noBesar from penjualan');
$dt = mysqli_fetch_array($qry);
$nofktr = $dt['noBesar'];
$order = (int) substr($nofktr, 3, 3);
$order++;
$firtLetter = "F";
$nofktr = $firtLetter . sprintf("%04s", $order);