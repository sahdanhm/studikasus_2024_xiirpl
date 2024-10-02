<?php
include '../config/koneksi.php';
$id = $_GET['id'];

mysqli_query($konek, "delete from petugas where idpetugas='$id'");
echo "<meta http-equiv='refresh' content='0;url=index.php?link=t-petugas'>";
?>