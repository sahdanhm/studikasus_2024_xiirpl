<?php
include '../config/koneksi.php';
$id=$_GET['id'];
mysqli_query($koneks,"delete from pelanggan where idpelanggan='$id'");
echo "<meta http-equiv='refresh' content='0;url=index.php?link=t-pelanggan'>";
