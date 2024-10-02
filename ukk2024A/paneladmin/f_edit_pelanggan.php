<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Pelanggan</title>
</head>

<body>
	<?php
	include '../config/koneksi.php';
	$id = $_GET['id'];
	$query = mysqli_query($konek, "select*from pelanggan where idpelanggan='$id'");
	$row = mysqli_fetch_array($query);
	?>
	<div class="container-fluid m-4">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="card">
					<div class="card-header bg-info text-white fw-bold">Input Data Pelanggan</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="mb-3">
								<label class="form-label">ID Pelanggan</label>
								<input type="text" class="form-control" name="txtid"
									value="<?php echo $row['idpelanggan']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Nama Pelanggan</label>
								<input type="text" class="form-control" name="txtnm"
									value="<?php echo $row['namapelanggan']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Alamat Pelanggan</label>
								<textarea class="form-control" name="txtalmt"
									rows="3"><?php echo $row['alamatpelanggan']; ?></textarea>
							</div>
							<div class="mb-3">
								<label class="form-label">Nomor Telepon</label>
								<input type="text" class="form-control" name="txttelp"
									value="<?php echo $row['telepon']; ?>">
							</div>

							<button type="submit" class="btn btn-primary text-white" name="bsimpan">Simpan
								Perubahan</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	include '../config/koneksi.php';
	if (isset($_POST['bsimpan'])) {
		$id2 = $_POST['txtid'];
		$nm = $_POST['txtnm'];
		$almt = $_POST['txtalmt'];
		$tlp = $_POST['txttelp'];
		mysqli_query($konek, "update pelanggan set idpelanggan='$id2',namapelanggan='$nm',alamatpelanggan='$almt',telepon='$tlp' where idpelanggan='$id'");
		echo "<meta http-equiv='refresh' content='0;url=index.php?link=t-pelanggan'>";
	}
	?>
</body>

</html>