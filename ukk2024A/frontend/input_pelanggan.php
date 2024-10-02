<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Pelanggan</title>
</head>
<body>
<div class="container-fluid m-4">
<div class="row">
<div class="col-md-8 mx-auto">
<div class="card">
	<div class="card-header bg-info text-white fw-bold">Input Data Pelanggan</div>
	<div class="card-body">
	<form action="" method="post">
		<div class="mb-3">
	  		<label class="form-label">ID Pelanggan</label>
	  		<input type="text" class="form-control" name="txtid" placeholder="Masukan ID Pelanggan">
		</div>
		<div class="mb-3">
	  		<label class="form-label">Nama Pelanggan</label>
	  		<input type="text" class="form-control" name="txtnm" placeholder="Masukan Nama Pelanggan">
		</div>
		<div class="mb-3">
	  		<label class="form-label">Alamat Pelanggan</label>
	  		<textarea class="form-control" name="txtalmt" rows="3"></textarea>
		</div>
		<div class="mb-3">
	  		<label class="form-label">Nomor Telepon</label>
	  		<input type="text" class="form-control" name="txttelp" placeholder="Masukan Nomor Telepon">
		</div>
		
		<button type="submit" class="btn btn-primary text-white" name="bsimpan">Simpan Data</button>
		<button type="reset" class="btn btn-warning text-white">Batal</button>
	</form>
<?php
	include "../config/koneksi.php";
	if (isset($_POST['bsimpan'])){
		$id=$_POST['txtid'];
		$nm=$_POST['txtnm'];
		$almt=$_POST['txtalmt'];
		$tlp=$_POST['txttelp'];
		$sql=mysqli_query($konek,"insert into pelanggan values('$id','$nm','$almt','$tlp')");
		echo "<metta http-equiv='refresh'content='0;url=index.php?page=Halaman_produk'>";
	}
?>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>