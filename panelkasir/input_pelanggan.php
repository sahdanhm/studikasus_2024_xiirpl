<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INPUT DATA PELANGGAN</title>
</head>

<body>
	<div class="container m-4">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header bg-info fw-bold text-white">INPUT DATA PELANGGAN</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="txtid"
									placeholder="ID Pelanggan">
								<label for="floatingInput">ID Pelanggan</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="txtnm"
									placeholder="Masukan Nama Pelanggan">
								<label for="floatingInput">Nama</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="almt"
									placeholder="Masukan almt">
								<label for="floatingInput">Alamat</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="tlp"
									placeholder="Masukan Telepon">
								<label for="floatingInput">Telepon</label>
							</div>
							<button type="submit" class="btn btn-primary text-white" name="bsimpan">Simpan Data</button>
							<button type="reset" class="btn btn-warning text-white" onclick="">Batal</button>
						</form>
						<?php
						include "../config/koneksi.php";
						if (isset($_POST['bsimpan'])) {
							$id = $_POST['txtid'];
							$nm = $_POST['txtnm'];
							$almt = $_POST['almt'];
							$tlp = $_POST['tlp'];

							mysqli_query($koneks, "insert into pelanggan values('$id','$nm','$almt','$tlp')");
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