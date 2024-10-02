<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Produk</title>
</head>

<body>
	<div class="container-fluid m-4">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="card">
					<div class="card-header bg-info text-white fw-bold">Edit Data Produk</div>
					<div class="card-body">
						<?php
						include '../config/koneksi.php';
						$id = $_GET['id'];
						$query = mysqli_query($konek, "select*from produk where idproduk='$id'");
						$row = mysqli_fetch_array($query);
						?>
						<form action="" method="post">
							<div class="mb-3">
								<label class="form-label">ID Produk</label>
								<input type="text" class="form-control" name="txtid"
									value="<?php echo $row['idproduk']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Nama Produk</label>
								<input type="text" class="form-control" name="txtnm"
									value="<?php echo $row['namaproduk']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Harga Produk</label>
								<input type="text" class="form-control" name="txtharga"
									value="<?php echo $row['hargaproduk']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Stok Produk</label>
								<input type="text" class="form-control" name="txtstok"
									value="<?php echo $row['stok']; ?>">
							</div>
							<button type="submit" class="btn btn-primary text-white" name="b_ubah">Simpan
								Perubahan</button>
						</form>
						<?php
						if (isset($_POST['b_ubah'])) {
							$id2 = $_POST['txtid'];
							$nm = $_POST['txtnm'];
							$hrg = $_POST['txtharga'];
							$stok = $_POST['txtstok'];

							mysqli_query($konek, "update produk set idproduk='$id2',namaproduk='$nm',hargaproduk='$hrg',stok='$stok' where idproduk='$id'");
							echo "<meta http-equiv='refresh' content='0;url=index.php?link=t-produk'>";
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>