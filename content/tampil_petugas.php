<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Petugas</title>
</head>

<body>
	<a href="index.php?link=inp_petugas"><button class="btn btn-info m-4 fw-bold text-white">Tambah Data</button></a>
	<a href="index.php?link=p-dapet"><button class="btn btn-info fw-bold text-white">Print Data</button></a>

	<div class="container-fluid">
		<div class="card">
			<div class="card-header bg-info fw-bold text-white">DATA PETUGAS</div>
			<div class="card-body">
				<table class="table table-bordered table-hover">
					<tr>
						<th>ID Petugas</th>
						<th>Nama Petugas</th>
						<th>Username</th>
						<th>Password</th>
						<th>Contact Petugas</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
					<?php
					include "../config/koneksi.php";
					$sql = mysqli_query($koneks, "select*from petugas");
					while ($tampil = mysqli_fetch_array($sql)) {
					?>
						<tr>
							<td><?php echo $tampil['idpetugas']; ?></td>
							<td><?php echo $tampil['namapetugas']; ?></td>
							<td><?php echo $tampil['username']; ?></td>
							<td><?php echo $tampil['password']; ?></td>
							<td><?php echo $tampil['telppetugas']; ?></td>
							<td><?php echo $tampil['level']; ?></td>
							<td><a href="index.php?link=f_edit_petugas&id=<?php echo $tampil['idpetugas']; ?>"><button class="btn btn-warning text-white">Edit</button></a>|<a href="hapus_petugas.php?id=<?php echo $tampil['idpetugas']; ?>"><button class="btn btn-danger text-white">Hapus</button></a>|<a href="index.php?link=p-each-pet&&id=<?php echo $tampil['idpetugas']; ?>"><button class="btn btn-primary text-white">Print</button></a></td>
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