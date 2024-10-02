<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UBAH DATA PETUGAS</title>
</head>

<body>
	<?php
	include "../config/koneksi.php";
	$id = $_GET['id'];
	$sql = mysqli_query($koneks, "select*from petugas where idpetugas='$id'");
	$tampil = mysqli_fetch_array($sql);
	?>
	<div class="container m-4">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-header bg-info fw-bold text-white">UBAH DATA PETUGAS</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="mb-3">
								<label class="form-label">ID Petugas</label>
								<input type="text" class="form-control" name="txtid" value="<?php echo $tampil['idpetugas']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Nama Petugas</label>
								<input type="text" class="form-control" name="txtnm" value="<?php echo $tampil['namapetugas']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Username</label>
								<input type="text" class="form-control" name="username" value="<?php echo $tampil['username']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Contact Petugas</label>
								<input type="text" class="form-control" name="contact" value="<?php echo $tampil['telppetugas']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Password</label>
								<input type="text" class="form-control" name="pass" value="<?php echo $tampil['password']; ?>">
							</div>
							<div class="mb-3">
								<label class="form-label">Level</label>
								<input type="text" class="form-control" name="level" value="<?php echo $tampil['level']; ?>">
							</div>
							<button type="submit" class="btn btn-primary text-white" name="ubah">Save Changes</button>
						</form>
						<?php

						if (isset($_POST['ubah'])) {
							$id2 = $_POST['txtid'];
							$nm = $_POST['txtnm'];
							$usr = $_POST['username'];
							$tlp = $_POST['contact'];
							$pass = $_POST['pass'];
							$lvl = $_POST['level'];

							mysqli_query($koneks, "update petugas set idpetugas='$id2',namapetugas='$nm',username='$usr',telppetugas='$tlp', password='$pass', level='$lvl' where idpetugas='$id'");
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