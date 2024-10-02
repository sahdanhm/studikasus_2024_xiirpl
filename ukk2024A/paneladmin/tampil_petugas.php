<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampil Petugas</title>
</head>
<body>
<a href="index.php?link=i_petugas"><button class="btn btn-primary text-white fw-bold m-4">Tambah Data</button></a>
<div class="container-fluid">
	<div class="card">
		<div class="card-header bg-info text-white fw-bold">DATA PETUGAS</div>
		<div class="card-body">
		<table class="table table-bordered table-hover">
			<tr>
				<th>ID Petugas</th>
				<th>Nama Petugas</th>
				<th>Username</th>
				<th>Password</th>
				<th>Nomor Telepon</th>
				<th>Level</th>
				<th>Aksi</th>
			</tr>
			<?php
			include '../config/koneksi.php';
			$query=mysqli_query($konek,"select*from petugas");
			while($row=mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $row['idpetugas'];?></td>
				<td><?php echo $row['namapetugas'];?></td>
				<td><?php echo $row['username'];?></td>
				<td><?php echo $row['password'];?></td>
				<td><?php echo $row['telppetugas'];?></td>
				<td><?php echo $row['level'];?></td>
				<td><a href="index.php?link=f_editpetugas&id=<?php echo $row['idpetugas'];?>"><button class="btn btn-warning text-white">Edit</button></a>|<a href="hapus_petugas.php?id=<?php echo $row['idpetugas'];?>"><button class="btn btn-danger text-white">Hapus</button></a></td>
			</tr>
			<?php } ?>
		</table>
	</div>
	</div>
</div>
</body>
</html>