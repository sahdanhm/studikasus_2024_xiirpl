<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INPUT DATA PRODUK</title>
</head>

<body>
	<div class="container m-4">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header bg-info fw-bold text-white">INPUT DATA PETUGAS</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="txtid" placeholder="ID Produk" required>
								<label for="floatingInput">ID Petugas</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="txtnm" placeholder="Masukan Nama Petugas">
								<label for="floatingInput">Nama Petugas</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="username" placeholder="Masukan Username">
								<label for="floatingInput">Username</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="pass" placeholder="Masukan Password">
								<label for="floatingInput">Password</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="tlp" placeholder="Masukan Contact Petugas">
								<label for="floatingInput">Contact Petugas</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="level" placeholder="Masukan Level Petugas">
								<label for="floatingInput">Level</label>
							</div>
							<button type="submit" class="btn btn-primary text-white" name="bsimpan">Save</button>
							<button onclick="history.back()" class="btn btn-warning text-white">Cancel</button>
							<button type="reset" class="btn btn-danger text-white">Reset</button>
						</form>
						<?php
						include "../config/koneksi.php";
						if (isset($_POST['bsimpan'])) {
							$id = $_POST['txtid'];
							$nm = $_POST['txtnm'];
							$usr = $_POST['username'];
							$pass = $_POST['pass'];
							$tlp = $_POST['tlp'];
							$lvl = $_POST['level'];

							mysqli_query($koneks, "insert into petugas values('$id','$nm','$usr','$pass','$tlp','$lvl')");
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