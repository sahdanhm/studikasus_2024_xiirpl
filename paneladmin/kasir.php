<?php
include("../config/koneksi.php");
$brg = mysqli_query($koneks, "select * from produk");


$sum = 0;
if (isset($_SESSION['krj'])) {
	foreach ($_SESSION['krj'] as $key => $value) {
		$sum += $value['price'] * $value['qty'];
	}
}

?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Penjualan</title>
</head>

<body>
	<div class="container">
		<h1>Kanggo kasir</h1>
		<a href="cart-reset.php"><button type="button" class="btn btn-outline-danger">Reset Cart</button></a>
		<hr>
		<div class="row">
			<div class="right col-md-8">
				<form action="cart.php" method="post">
					<div class="input-group mb-3 input-group-sm">
						<select class="form-select me-3 rounded" aria-label="Select form" name="produk">
							<option selected>Choose produk</option>
							<?php
							while ($row = mysqli_fetch_array($brg)) {
								echo "<option value='$row[idproduk]'>$row[namaproduk]</option>";
							}
							?>
						</select>
						<input type="number" class="form-control rounded-start" placeholder="Amount"
							aria-label="Masukan Jumlah" aria-describedby="button-addon2" name="jml">
						<button class="btn btn-outline-primary" type="submit" id="btambah" name="btambah">Add
							Product</button>
					</div>
				</form>
				<br>
				<form action="cart-update.php" method="post">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID Product</th>
								<th>Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Subtotal</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php
						error_reporting(0);
						foreach ($_SESSION['krj'] as $key => $value) {
							?>
							<tbody>
								<tr>
									<td><?php echo $value['id'] ?></td>
									<td><?php echo $value['name'] ?></td>
									<td><?php echo $value['price'] ?></td>
									<td>
										<input type="number" name="qty[]" value="<?php echo $value['qty']; ?>"
											class="form-control">
									</td>
									<td><?php echo $value['price'] * $value['qty']; ?></td>
									<td><a href="cart-del.php?id=<?php echo $value['id']; ?>">delete</a></td>
								</tr>
							</tbody>
						<?php } ?>
					</table>
					<button type="submit" class="btn btn-outline-warning">Refresh</button>
				</form>
			</div>
			<div class="left col">
				<?php
				$qry = mysqli_query($koneks, 'select max(idpenjualan) as noBesar from penjualan');
				$dt = mysqli_fetch_array($qry);
				$nofktr = $dt['noBesar'];
				$order = (int) substr($nofktr, 3, 3);
				$order++;
				$firtLetter = "F";
				$nofktr = $firtLetter . sprintf("%04s", $order);
				?>
				<form action="sell-process.php" method="post" name="formBayar">
					<label for="nofktr" class="form-label fw-bold">No Faktur</label>
					<input type="text" class="form-control form-control-sm mb-3" id="nofktr" name="nofktr"
						value="<?php echo $nofktr ?>" readonly>

					<label for="idpel" class="form-label fw-bold">ID Pelanggan</label>
					<select type="date" class="form-select form-select-sm mb-3" id="idpel"
						onchange="changeValue(this.value)" name="idpel">
						<option selected>Pilih Pelanggan</option>

						<?php
						$qry2 = mysqli_query($koneks, "select * from pelanggan");
						$nmArray = "var nmPel = new Array();\n";
						while ($row2 = mysqli_fetch_array($qry2)) {

							echo '<option value="' . $row2['idpelanggan'] . '">' . $row2['idpelanggan'] . '</option>';
							$nmArray .= "nmPel['" . $row2['idpelanggan'] . "'] = {nama:'" . addslashes($row2['namapelanggan']) . "'};\n";

						}
						?>
					</select>

					<input type="text" name="nmpel" id="nmpel" class="form-control mb-3" readonly>

					<h3 class="bg-info text-white text-center">Total Rp.<?php echo number_format($sum, '0', '.', '.');
					?></h3>

					<input type="hidden" name="total" id="" value="<?php echo $sum ?>" onfocus="startCals()"
						onblur="stopCalc()">

					<label for="byr" class="form-label fw-bold">Money</label>
					<input type="number" class="form-control form-control-sm mb-3" id="byr" name="byr"
						onfocus="startCalc()" onblur="stopCalc()">

					<label for="chg" class="form-label fw-bold">Changes</label>
					<input type="text" class="form-control form-control-sm mb-3" id="chg" name="chg">
					<button type="submit" class="btn btn-outline-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		<?php echo $nmArray; ?>
		function changeValue(x) {
			document.getElementById('nmpel').value = nmPel[x].nama;
		}

		function startCalc() {
			interval = setInterval("calc()", 1);
		}
		function calc() {
			bayar = document.formBayar.byr.value;
			total = document.formBayar.total.value;
			document.formBayar.chg.value = bayar - total;
		}
		function stopCalc() {
			clearInterval(interval);
		}
	</script>
</body>

</html>