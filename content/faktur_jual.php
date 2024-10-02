<link rel="stylesheet" href="../config/css/print.css">
<body onafterprint="back()">
	<div class="container-xxl">
		<div id="print">
			<h2 class="text-center">FAKTUR PENJUALAN</h2>
			<h3>Toko Syahdan Kasep</h3>
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
			<div class="right-sign me-5 mt-5 text-center float-end" style="width:fit-content;">
                <p class="fw-bold">
                    Waktu cetak
                </p>

                <p class="mt-5" id="date">

                </p>
            </div>
            <div class="left-sign ms-5 mt-5 text-center " style="width:fit-content;">
                <p>
                    <?php echo $_SESSION['level'] . ","; ?>
                </p>

                <p class="mt-5 fw-bold">
                    <?php echo $_SESSION['user']; ?>
                </p>
            </div>
		</div>

	</div>
	<script>
		window.print();

		function back() {
			location.href = "index.php?link=transaction";
		}
	</script>
    <script src="../config/js/date.js"></script>

</body>

</html>