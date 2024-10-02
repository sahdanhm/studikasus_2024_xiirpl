<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Petugas</title>
</head>

<body>
	<?php
	include '../config/koneksi.php';
	$id = $_GET['id'];
	$query = mysqli_query($konek, "select*from petugas where idpetugas='$id'");
	$row = mysqli_fetch_array($query);
	?>
	<div class="container-fluid m-4">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="card">
					<div class="card-header bg-info text-white fw-bold">Input Data Petugas</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="mb-3">
								<label class="form-label">ID Petugas</label>
								<input type="text" class="form-control" name="txtid"
									value="<?php echo $row['idpetugas']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Nama Petugas</label>
								<input type="text" class="form-control" name="txtnm"
									value="<?php echo $row['namapetugas']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Username</label>
								<input type="text" class="form-control" name="txtuser"
									value="<?php echo $row['username']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Password</label>
								<input type="text" class="form-control" name="txtpass"
									value="<?php echo $row['password']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Nomor Telepon</label>
								<input type="text" class="form-control" name="txttelp"
									value="<?php echo $row['telppetugas']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Pilih Level</label>
								<select class="form-select" name="level">
									<?php
									$sql = mysqli_query($konek, "select*from petugas");
									while ($dt_level = mysqli_fetch_array($sql)) {
										if ($row['level'] == $dt_level['level']) {
											$select = "selected";
										} else {
											$select = "";
										}
										echo "<option value=" . $dt_level['level'] . " $select>" . $dt_level['level'] . "</option>";
									}
									?>
								</select>
							</div>
							<button type="submit" class="btn btn-primary text-white" name="bsimpan">Simpan
								Perubahan</button>

						</form>
						<?php
						include '../config/koneksi.php';
						if (isset($_POST['bsimpan'])) {
							$id2 = $_POST['txtid'];
							$nm = $_POST['txtnm'];
							$user = $_POST['txtuser'];
							$pass = $_POST['txtpass'];
							$tlp = $_POST['txttelp'];
							$lvl = $_POST['level'];
							mysqli_query($konek, "update petugas set idpetugas='$id2',namapetugas='$nm',username='$user',password='$pass',telppetugas='$tlp',level='$lvl' where idpetugas='$id'");
							echo "<meta http-equiv='refresh' content='0;url=index.php?link=t-petugas'>";
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>