<?php
if (isset($_GET['page'])){
	$halaman = $_GET['page'];
switch ($halaman) {
	case 'Beranda':
		include 'beranda.php';
		break;
	case 'Halaman_produk';
		include 'halaman_produk.php';	
		break;

	case 'Halaman_pelanggan';
		include 'halaman_pelanggan.php';
		break;

	case 'input_pelanggan';
		include 'input_pelanggan.php';
		break;
		
	case 'kasir':
		include '../paneladmin/kasir.php';
		break;
		
		include 'beranda.php';
		break;
}
}