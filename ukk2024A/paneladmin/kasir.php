<?php
include '../config/koneksi.php';
$barang=mysqli_query($konek,"select*from produk");

$sum=0;
if(isset($_SESSION['cart'])){
	foreach($_SESSION['cart'] as $key =>$value){
		$sum += $value['harga']*$value['qty'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KASIR</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1>Aplikasi Kasir</h1>
			<h3>Toko Grosir Sumber Makmur</h3>
			<a href="keranjang_reset.php"><button class="btn btn-outline-danger">Reset Keranjang</button></a>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<form class="form-inline" method="post" action="keranjang.php">
				<div class="input-group">
				<select name="produk" class="form-control me-2">
					<option selected>Pilih Produk</option>
					<?php
					while($row=mysqli_fetch_array($barang)){
						echo "<option value=$row[idproduk]>$row[namaproduk]</option>";
					}
					?>
				</select>
				<input type="number" name="txtjumlah" class="form-control" placeholder="Masukan jumlah barang" required>
				<button type="submit" class="btn btn-outline-primary" name="btambah">Tambah Barang</button>
				</div>
			</form>
			<br>
			<form method="post" action="keranjang_update.php">
				<table class="table table-bordered">
					<tr>
						<td>ID Barang</td>
						<td>Nama Barang</td>
						<td>Harga</td>
						<td>Qty</td>
						<td>Subtotal</td>
						<td>Aksi</td>
					</tr>
					<?php
					error_reporting(0);
					foreach($_SESSION['cart'] as $key => $value){
					?>
					<tr>
						<td><?php echo $value['id'];?></td>
						<td><?php echo $value['nama'];?></td>
						<td><?php echo $value['harga'];?></td>
						<td><input type="number" name="qty[]" value="<?php echo $value['qty'];?>" class="form-control"></td>
						<td><?php echo $value['harga']*$value['qty'];?></td>
						<td><a href="keranjang_hapus.php?id=<?php echo $value['id'];?>"><i class="fa-solid fa-trash"></i></a></td>
					</tr>
					<?php } ?>
				</table>
				<button type="submit" class="btn btn-outline-success">Perbaharui</button>
			</form>
			</div>
		<div class="col-md-4">
			<?php
				$qry=mysqli_query($konek,"select max(idpenjualan) as nomorBesar from penjualan");
				$dt=mysqli_fetch_array($qry);
				$nofaktur=$dt['nomorBesar'];
				$urutan=(int)substr($nofaktur, 3, 3);
				$urutan++;
				$hurufawal="F";
				$nofaktur=$hurufawal.sprintf("%04s", $urutan);
			?>
		<form action="proses_penjualan.php" method="post" name="formBayar">
			<label class="form-label fw-bold">No Faktur</label>
			<input type="text" class="form-control mb-2" name="txtfaktur" value="<?php echo $nofaktur ?>" readonly>
			<label class="form-label fw-bold">ID Pelanggan</label>
			<select name="idpel" class="form-select mb-2" onchange="changeValue(this.value)">
				<option disabled="" selected>Pilih Pelanggan</option>
				<?php 
					  $sql=mysqli_query($konek,"SELECT * FROM pelanggan");
					  $nmArray = "var nmPel = new Array();\n";
					  while ($data=mysqli_fetch_array($sql)) {
					 
					   echo '<option value="'.$data['idpelanggan'].'">'.$data['idpelanggan'].'</option> ';
					   $nmArray .= "nmPel['" . $data['idpelanggan'] . "'] = {nama:'" . addslashes($data['namapelanggan']) . "'};\n";
					  }
				?>
			</select>
			<input type="text" name="txtnmpelanggan" id="txtnamapelanggan" class="form-control mb-2" readonly>
			<h3 class="bg-info text-white text-center">Total Rp.<?php echo $sum ?></h3>
			<input type="hidden" name="txttotal" value="<?php echo $sum ?>" onFocus="startCalc();" onBlur="stopCalc();">
			<label class="form-label fw-bold">Bayar</label>
			<input type="text" name="txtbyr" class="form-control mb-2" onFocus="startCalc();" onBlur="stopCalc();">
			<label class="form-label fw-bold">Kembalian</label>
			<input type="text" name="txtkembali" class="form-control mb-2">
			<button type="submit" class="btn btn-primary">Selesai</button>
		</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	<?php echo $nmArray; ?>
	function changeValue(x){
		document.getElementById('txtnamapelanggan').value=nmPel[x].nama;
	}


	function startCalc(){
		interval=setInterval("calc()",1);
	}
	function calc(){
		bayar=document.formBayar.txtbyr.value;
		total=document.formBayar.txttotal.value;
		document.formBayar.txtkembali.value=bayar-total;
	}
	function stopCalc(){
		clearInterval(interval);
	}
</script>
</body>
</html>