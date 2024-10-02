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
					<div class="card-header bg-info fw-bold text-white">INPUT DATA PRODUK</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="txtid"
									placeholder="ID Produk" required>
								<label for="floatingInput">ID Produk</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="txtnm"
									placeholder="Masukan Nama Produk">
								<label for="floatingInput">Nama Produk</label>
							</div>
							<div class="form-floating mb-3">
								<input type="text" class="form-control" id="floatingInput" name="txtharga"
									placeholder="Masukan Harga Produk">
								<label for="floatingInput">Harga Produk</label>
							</div>
							<div class="form-floating">
								<input type="text" class="form-control" id="floatingInput" name="txtstok"
									placeholder="Masukan Stok Produk">
								<label for="floatingInput">Stok Produk</label>
							</div>
							<div class="mb-3">

								<label for="img" style="font-size:x-small; font-style:italic;">*Image Produk</label>
								<input type="file" class="form-control" id="img" name="img-pro">
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
							$hrg = $_POST['txtharga'];
							$stk = $_POST['txtstok'];
							

							mysqli_query($koneks, "insert into produk values('$id','$nm','$hrg','$stk')");
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