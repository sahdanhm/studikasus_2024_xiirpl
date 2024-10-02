<?php
error_reporting(0);
session_start();
$_SESSION['cart']=[];
header("location:index.php?link=kasir");
?>