<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FAKTUR</title>
</head>
<style>
</style>

<body>
	<div class="container">
		<div id="print">
			<h2 class="text-center">FAKTUR PENJUALAN</h2>
			<h3>Toko Sumber Makmur</h3>
			<?php
			include "../config/koneksi.php";
			$idjual = $_GET['idjual'];
			$i = 1;
			$sql = mysqli_query($koneks, "select * from produk,detailpenjualan,penjualan,pelanggan where detailpenjualan.idpenjualan='$idjual' and produk.idproduk=detailpenjualan.idproduk and penjualan.idpenjualan=detailpenjualan.idpenjualan and pelanggan.idpelanggan=penjualan.idpelanggan");
			$tampil = mysqli_fetch_array($sql);
			?>
			<table class="table table-borderless">
				<tr>
					<td>No Faktur</td>
					<td>:</td>
					<td><?php echo $tampil['idpenjualan']; ?></td>
				</tr>
				<tr>
					<td>Tanggal Transaksi</td>
					<td>:</td>
					<td><?php echo $tampil['tglpenjualan']; ?></td>
				</tr>
				<tr>
					<td>Pelanggan</td>
					<td>:</td>
					<td><?php echo $tampil['idpelanggan']; ?></td>
				</tr>
				<tr>
					<td>No Telepon</td>
					<td>:</td>
					<td><?php echo $tampil['telepon']; ?></td>
				</tr>
			</table>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Qty</th>
						<th>Subtotal</th>
					</tr>
				</thead>
				<?php $sql2 = mysqli_query($koneks, "select * from produk,detailpenjualan,penjualan,pelanggan where detailpenjualan.idpenjualan='$idjual' and produk.idproduk=detailpenjualan.idproduk and penjualan.idpenjualan=detailpenjualan.idpenjualan and pelanggan.idpelanggan=penjualan.idpelanggan");
				while ($tampil2 = mysqli_fetch_array($sql2)) { ?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $tampil2['idproduk']; ?></td>
						<td><?php echo $tampil2['namaproduk']; ?></td>
						<td>Rp.<?php $subtotal = $tampil2['hargaproduk'];
						echo number_format($subtotal, '0', '.', '.')
							?></td>
						<td><?php echo $tampil2['jumlahproduk']; ?></td>
						<td>Rp.<?php $subtotal = $tampil2['subtotal'];
						echo number_format($subtotal, '0', '.', '.')
							?></td>
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan="5">Total</td>
					<td>Rp.<?php $tharga = $tampil['totalharga'];
					echo number_format($tharga, '0', '.', '.');
						?></td>
				</tr>
				<tr>
					<td colspan="5">Status</td>
					<td><?php echo $_SESSION['st']; ?></td>
				</tr>
			</table>
		</div>
		<!-- <button onclick="printer()">Print</button> -->

	</div>
	<script>
		window.print();
	</script>
</body>

</html>