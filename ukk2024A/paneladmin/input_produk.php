<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Produk</title>
</head>

<body>
	<div class="container-fluid m-4">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="card">
					<div class="card-header bg-info text-white fw-bold">Input Data Produk</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="mb-3">
								<label class="form-label">ID Produk</label>
								<input type="text" class="form-control" name="txtid" placeholder="Masukan ID Produk">
							</div>
							<div class="mb-3">
								<label class="form-label">Nama Produk</label>
								<input type="text" class="form-control" name="txtnm" placeholder="Masukan Nama Produk">
							</div>
							<div class="mb-3">
								<label class="form-label">Harga Produk</label>
								<input type="text" class="form-control" name="txtharga"
									placeholder="Masukan Harga Produk">
							</div>
							<div class="mb-3">
								<label class="form-label">Stok Produk</label>
								<input type="text" class="form-control" name="txtstok"
									placeholder="Masukan Stok Produk">
							</div>
							<button type="submit" class="btn btn-primary text-white" name="bsimpan">Simpan Data</button>
							<button type="reset" class="btn btn-warning text-white">Batal</button>
						</form>
						<?php
						include '../config/koneksi.php';
						if (isset($_POST['bsimpan'])) {
							$id = $_POST['txtid'];
							$nm = $_POST['txtnm'];
							$hrg = $_POST['txtharga'];
							$stok = $_POST['txtstok'];

							mysqli_query($konek, "insert into produk values('$id','$nm','$hrg','$stok')");
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