<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampil Pelanggan</title>
</head>
<body>
<a href="index.php?link=i_pelanggan"><button class="btn btn-primary text-white fw-bold m-4">Tambah Data</button></a>
<div class="container-fluid">
	<div class="card">
		<div class="card-header bg-info text-white fw-bold">DATA PELANGGAN</div>
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
			$query=mysqli_query($konek,"select*from pelanggan");
			while($row=mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $row['idpelanggan'];?></td>
				<td><?php echo $row['namapelanggan'];?></td>
				<td><?php echo $row['alamatpelanggan'];?></td>
				<td><?php echo $row['telepon'];?></td>
				<td><a href="index.php?link=f_editpelanggan&id=<?php echo $row['idpelanggan'];?>"><button class="btn btn-warning text-white">Edit</button></a>|<a href="hapus_pelanggan.php?id=<?php echo $row['idpelanggan'];?>"><button class="btn btn-danger text-white">Hapus</button></a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
	</div>
</div>
</body>
</html>