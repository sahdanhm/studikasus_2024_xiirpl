<?php
include "config/koneksi.php";
$sql = mysqli_query($koneks, "select * from pelanggan");
$assc = mysqli_fetch_array($sql);
var_dump($assc);