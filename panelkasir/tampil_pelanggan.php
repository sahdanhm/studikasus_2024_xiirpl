<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Pelanggan</title>
</head>
<body>
<a href="index.php?link=inp_pelanggan"><button class="btn btn-info m-4 fw-bold text-white">Tambah Data</button></a>
<div class="container-fluid">
	<div class="card">
		<div class="card-header bg-info fw-bold text-white">DATA PELANGGAN</div>
		<div class="card-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>ID Pelanggan</th>
					<th>Nama Pelanggan</th>
					<th>Alamat Pelanggan</th>
					<th>Nomor Telepon</th>
					<th>Aksi</th>
				</tr>
				<?php
				include '../config/koneksi.php';
				$sql=mysqli_query($koneks,"select*from pelanggan");
				while($tampil=mysqli_fetch_array($sql)){
				?>
				<tr>
					<td><?php echo $tampil['idpelanggan'];?></td>
					<td><?php echo $tampil['namapelanggan'];?></td>
					<td><?php echo $tampil['alamatpelanggan'];?></td>
					<td><?php echo $tampil['telepon'];?></td>
					<td><a href="index.php?link=f_edit_pelanggan&id=<?php echo $tampil['idpelanggan'];?>"><button class="btn btn-warning text-white">Edit</button></a>|<a href="hapus_pelanggan.php?id=<?php echo $tampil['idpelanggan'];?>"><button class="btn btn-danger text-white">Hapus</button></a></td>
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