<?php
if (isset($_GET['link'])) {
	$tampil = $_GET['link'];
	switch ($tampil) {
		case 'brnd':
			include 'beranda.php';
			break;

		case 't-produk':
			include 'tampil_produk.php';
			break;

		case 't-petugas':
			include 'tampil_petugas.php';
			break;

		case 't-pelanggan':
			include 'tampil_pelanggan.php';
			break;

		case 'inp_produk':
			include 'input_produk.php';
			break;

		case 'inp_petugas':
			include 'input_petugas.php';
			break;

		case 'inp_pelanggan':
			include 'input_pelanggan.php';
			break;

		case 'laporpen':
			include 'laporan-penjualan.php';
			break;

		case 'showlapen':
			include 'show-lapen.php';
			break;

		case 'f_edit_produk':
			include 'form_edit_produk.php';
			break;

		case 'f_edit_petugas':
			include 'form_edit_petugas.php';
			break;

		case 'f_edit_pelanggan':
			include 'form_edit_pelanggan.php';
			break;

		case 'transaksi':
			include 'transaksi.php';
			break;

		case 'faktur':
			include 'faktur_jual.php';
			break;

		case 'habis':
			include 'tampil_produk_habis.php';
			break;
		case 'print-lapen':
			include 'print-lapen.php';
			break;

		default:
			include 'beranda.php';
			break;
	}
} else {
	include 'beranda.php';
}
?>