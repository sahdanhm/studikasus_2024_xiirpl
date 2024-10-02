<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UBAH DATA PRODUK</title>
</head>

<body>
	<?php
	include "../config/koneksi.php";
	$id = $_GET['id'];
	$sql = mysqli_query($koneks, "select*from produk where idproduk='$id'");
	$tampil = mysqli_fetch_array($sql);
	?>
	<div class="container m-4">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header bg-info fw-bold text-white">UBAH DATA PRODUK</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="mb-3">
								<label class="form-label">ID Produk</label>
								<input type="text" class="form-control" name="txtid" value="<?php echo $tampil['idproduk']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Nama Produk</label>
								<input type="text" class="form-control" name="txtnm" value="<?php echo $tampil['namaproduk']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Harga Produk</label>
								<input type="text" class="form-control" name="txtharga" value="<?php echo $tampil['hargaproduk']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Stok Produk</label>
								<input type="text" class="form-control" name="txtstok" value="<?php echo $tampil['stok']; ?>">
							</div>
							<button type="submit" class="btn btn-primary text-white" name="bubah">Save Changes</button>
						</form>
						<?php

						if (isset($_POST['bubah'])) {
							$id2 = $_POST['txtid'];
							$nm = $_POST['txtnm'];
							$hrg = $_POST['txtharga'];
							$stk = $_POST['txtstok'];

							mysqli_query($koneks, "update produk set idproduk='$id2',namaproduk='$nm',hargaproduk='$hrg',stok='$stk' where idproduk='$id'");
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