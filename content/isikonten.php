<?php
if (isset($_GET['link'])) {
	$tampil = $_GET['link'];
	switch ($tampil) {
		case 'brnd':
			include 'beranda.php';
			break;
		case 'habis':
			include 'tampil_produk_habis.php';
			break;



		case 'inp_produk':
			include 'input_produk.php';
			break;
		case 'f_edit_produk':
			include 'form_edit_produk.php';
			break;
		case 't-produk':
			include 'tampil_produk.php';
			break;
		case 'p-dapro':
			include 'p-dapro.php';
			break;
		case 'p-each-pro':
			include 'p-each-pro.php';
			break;



		case 't-petugas':
			include 'tampil_petugas.php';
			break;
		case 'inp_petugas':
			include 'input_petugas.php';
			break;
		case 'f_edit_petugas':
			include 'form_edit_petugas.php';
			break;
		case 'p-dapet':
			include 'p-dapet.php';
			break;
		case 'p-each-pet':
			include 'p-each-pet.php';
			break;



		case 'p-dapel':
			include 'p-dapel.php';
			break;
		case 'p-each-pel':
			include 'p-each-pel.php';
			break;
		case 'f_edit_pelanggan':
			include 'form_edit_pelanggan.php';
			break;
		case 'inp_pelanggan':
			include 'input_pelanggan.php';
			break;
		case 't-pelanggan':
			include 'tampil_pelanggan.php';
			break;



		case 'cart':
			include 'cart.php';
			break;
		case 'cdelete':
			include 'cart-del.php';
			break;
		case 'creset':
			include 'cart-reset.php';
			break;
		case 'cupdt':
			include 'cart-update.php';
			break;
		case 'transaction':
			include 'transaction.php';
			break;
		case 'sellprcs':
			include 'sell-process.php';
			break;
		case 'faktur':
			include 'faktur_jual.php';
			break;



		case 'print-lapen':
			include 'print-lapen.php';
			break;
		case 'print-each-lapen':
			include 'print-each-lapen.php';
			break;
		case 'laporpen':
			include 'laporan-penjualan.php';
			break;
		case 'showlapen':
			include 'show-lapen.php';
			break;



		default:
			include 'beranda.php';
			break;
	}
} else {
	include 'beranda.php';
}
