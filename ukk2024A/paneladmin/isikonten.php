<?php
if (isset($_GET['link'])) {
	$tampil = $_GET['link'];
	switch ($tampil) {
		case 't-produk':
			include 'tampil_produk.php';
			break;

		case 'brnd':
			include 'beranda.php';
			break;

		case 't-petugas':
			include 'tampil_petugas.php';
			break;

		case 't-pelanggan':
			include 'tampil_pelanggan.php';
			break;

		case 'i_produk':
			include 'input_produk.php';
			break;

		case 'i_petugas':
			include 'input_petugas.php';
			break;

		case 'i_pelanggan':
			include 'input_pelanggan.php';
			break;

		case 'f_editproduk':
			include 'f_edit_produk.php';
			break;

		case 'f_editpetugas':
			include 'f_edit_petugas.php';
			break;

		case 'f_editpelanggan':
			include 'f_edit_pelanggan.php';
			break;

		case 'lapor':
			include 'laporan_penjualan.php';
			break;

		case 'proses_laporan':
			include 'proses_laporan_penjualan.php';
			break;

		case 'kasir':
			include 'kasir.php';
			break;

		case 'faktur':
			include 'faktur_jual.php';
			break;

		default:
			include 'beranda.php';
			break;
	}
}
?>