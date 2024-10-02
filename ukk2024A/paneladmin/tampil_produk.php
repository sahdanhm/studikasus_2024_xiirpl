<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampil Produk</title>
</head>
<body>
<a href="index.php?link=i_produk"><button class="btn btn-primary text-white fw-bold m-4">Tambah Data</button></a>
<div class="container-fluid">
	<div class="card">
		<div class="card-header bg-info text-white fw-bold">DATA PRODUK</div>
		<div class="card-body">
		<table class="table table-bordered table-hover">
			<tr class="text-center">
				<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Harga Produk</th>
				<th>Stok</th>
				<th>Aksi</th>
			</tr>
			<?php
			include '../config/koneksi.php';
			$query=mysqli_query($konek,"select*from produk");
			while($row=mysqli_fetch_array($query)){
			?>
			<tr class="text-center">
				<td><?php echo $row['idproduk'];?></td>
				<td><?php echo $row['namaproduk'];?></td>
				<td><?php echo "Rp.".$row['hargaproduk'];?></td>
				<td><?php echo $row['stok'];?></td>
				<td><a href="index.php?link=f_editproduk&id=<?php echo $row['idproduk'];?>"><button class="btn btn-warning text-white">Edit</button></a>|<a href="hapus_produk.php?id=<?php echo $row['idproduk'];?>"><button class="btn btn-danger text-white">Hapus</button></a></td>
			</tr>
			<?php } ?> 
		</table>
	</div>
	</div>
</div>
</body>
</html>