<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UBAH DATA PELANGGAN</title>
</head>

<body>
	<?php
	include "../config/koneksi.php";
	$id = $_GET['id'];
	$sql = mysqli_query($koneks, "select*from pelanggan where idpelanggan='$id'");
	$tampil = mysqli_fetch_array($sql);
	?>
	<div class="container m-4">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header bg-info fw-bold text-white">UBAH DATA PELANGGAN</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="mb-3">
								<label class="form-label">ID Pelanggan</label>
								<input type="text" class="form-control" name="txtid"
									value="<?php echo $tampil['idpelanggan']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Nama</label>
								<input type="text" class="form-control" name="txtnm"
									value="<?php echo $tampil['namapelanggan']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Alamat</label>
								<input type="text" class="form-control" name="almt"
									value="<?php echo $tampil['alamatpelanggan']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Contact</label>
								<input type="text" class="form-control" name="tlp"
									value="<?php echo $tampil['telepon']; ?>">
							</div>
							<button type="submit" class="btn btn-primary text-white" name="bubah">Simpan
								Perubahan</button>
						</form>
						<?php

						if (isset($_POST['bubah'])) {
							$id2 = $_POST['txtid'];
							$nm = $_POST['txtnm'];
							$almt = $_POST['almt'];
							$tlp = $_POST['tlp'];

							mysqli_query($koneks, "update pelanggan set idpelanggan='$id2',namapelanggan='$nm',alamatpelanggan='$almt',telepon='$tlp' where idpelanggan='$id'");
							echo "<meta http-equiv='refresh' content='0;url=index.php?link=t-pelanggan'>";
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>