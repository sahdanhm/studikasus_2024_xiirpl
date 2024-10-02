<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Produk</title>
	<style>
		img{
			width: 10vw;
		}
	</style>
</head>

<body>
	<a href="index.php?link=inp_produk"><button class="btn btn-info m-4 fw-bold text-white">Tambah Data</button></a>
	<a href="index.php?link=p-dapro"><button class="btn btn-info fw-bold text-white">Print Data</button></a>

	<div class="container-fluid">
		<div class="card">
			<div class="card-header bg-info fw-bold text-white">DATA PRODUK</div>
			<div class="card-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th>ID Produk</th>
						<th>Nama Produk</th>
						<th>Harga Produk</th>
						<th>Stok Produk</th>
						<th>Images</th>
						<th>Aksi</th>
					</tr>
					<?php
					include "../config/koneksi.php";
					$sql = mysqli_query($koneks, "select*from produk");
					while ($tampil = mysqli_fetch_array($sql)) {
					?>
						<tr>
							<td><?php echo $tampil['idproduk']; ?></td>
							<td><?php echo $tampil['namaproduk']; ?></td>
							<td><?php echo "Rp." . number_format($tampil['hargaproduk'], "0", ",", "."); ?></td>
							<td><?php echo $tampil['stok']; ?></td>
							<td class="text-center"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($tampil['image']).'"/>';?></td>
							<td><a href="index.php?link=f_edit_produk&id=<?php echo $tampil['idproduk']; ?>"><button class="btn btn-warning text-white">Edit</button></a>|<a href="hapus_produk.php?id=<?php echo $tampil['idproduk']; ?>"><button class="btn btn-danger text-white">Hapus</button></a>|<a href="index.php?link=p-each-pro&&id=<?php echo $tampil['idproduk']; ?>"><button class="btn btn-primary text-white">Print</button></a></td>
						</tr>
					<?php
					}
					?>
				</table>
			</div>
		</div>
	</div>
</body>

</html>