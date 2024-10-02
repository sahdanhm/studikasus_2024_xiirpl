<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Petugas</title>
</head>

<body>
	<div class="container-fluid m-4">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="card">
					<div class="card-header bg-info text-white fw-bold">Input Data Petugas</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="mb-3">
								<label class="form-label">ID Petugas</label>
								<input type="text" class="form-control" name="txtid" placeholder="Masukan ID Petugas">
							</div>
							<div class="mb-3">
								<label class="form-label">Nama Petugas</label>
								<input type="text" class="form-control" name="txtnm" placeholder="Masukan Nama Petugas">
							</div>
							<div class="mb-3">
								<label class="form-label">Username</label>
								<input type="text" class="form-control" name="txtuser" placeholder="Masukan Username">
							</div>
							<div class="mb-3">
								<label class="form-label">Password</label>
								<input type="text" class="form-control" name="txtpass" placeholder="Masukan Password">
							</div>
							<div class="mb-3">
								<label class="form-label">Nomor Telepon</label>
								<input type="text" class="form-control" name="txttelp"
									placeholder="Masukan Nomor Telepon">
							</div>
							<div class="mb-3">
								<label class="form-label">Pilih Level</label>
								<select class="form-select" name="level">
									<option value="admin">Administrator</option>
									<option value="kasir">Kasir</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary text-white" name="bsimpan">Simpan Data</button>
							<button type="reset" class="btn btn-warning text-white">Batal</button>
						</form>
						<?php
						include '../config/koneksi.php';
						if (isset($_POST['bsimpan'])) {
							$id = $_POST['txtid'];
							$nm = $_POST['txtnm'];
							$user = $_POST['txtuser'];
							$pass = $_POST['txtpass'];
							$tlp = $_POST['txttelp'];
							$lvl = $_POST['level'];
							mysqli_query($konek, "insert into petugas values('$id','$nm','$user','$pass','$tlp','$lvl')");
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