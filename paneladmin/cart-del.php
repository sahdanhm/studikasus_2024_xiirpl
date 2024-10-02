<?php
include("../config/koneksi.php");
session_start();
$id = $_GET['id'];
$cart = $_SESSION['krj'];
$krj = array_filter($cart, function ($var) use ($id) {
    return $var['id'] == $id; });



foreach ($krj as $k => $v) {
    unset($_SESSION['krj'][$k]);
}
$_SESSION['krj'] = array_values($_SESSION['krj']);
header('location:index.php?link=kasir');
