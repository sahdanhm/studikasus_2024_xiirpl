<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Produk</title>
</head>
<body>
<div class="container-fluid m-4">
<div class="card">
	<div class="card-header bg-info text-white fw-bold">Pilih Bulan dan Tahun</div>
	<div class="card-body">
	<form action="index.php?link=proses_laporan" method="post">
		<div class="mb-3">
			<label class="form-label">Bulan</label>
			<select class="form-select" name="bln">
			  <option value="01">Januari</option>
			  <option value="02">Februari</option>
			  <option value="03">Maret</option>
			  <option value="04">April</option>
			  <option value="05">Mei</option>
			  <option value="06">Juni</option>
			  <option value="07">Juli</option>
			  <option value="08">Agustus</option>
			  <option value="09">September</option>
			  <option value="10">Oktober</option>
			  <option value="01">November</option>
			  <option value="12">Desember</option>
			</select>
		</div>
		<div class="mb-3">
			<label class="form-label">Tahun</label>
			<select class="form-select" name="thn">
			  <option value="2022">2022</option>
			  <option value="2023">2023</option>
			  <option value="2024">2024</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary text-white">Proses Data</button>
		
	</form>
	</div>
</div>
</div>
</body>
</html>