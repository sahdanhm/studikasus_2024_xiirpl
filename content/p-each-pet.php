<style>
</style>
<link rel="stylesheet" href="../config/css/print.css">
<body onafterprint="back()">
	<div class="container-xxl">
		<div id="print">
			<h1 class="text-center">Data Petugas</h1>
			<h5>Toko Syahdan Kasep</h5>
			<?php
			include "../config/koneksi.php";
			$idpet = $_GET['id'];
			$sql = mysqli_query($koneks, "select * from petugas where idpetugas = '$idpet'");
			$tampil = mysqli_fetch_array($sql);
			?>
			<table class="table table-borderless mt-5">
				<tr>
					<td>ID</td>
					<td>:</td>
					<td><?php echo $tampil['idpetugas']; ?></td>
				</tr>
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><?php echo $tampil['namapetugas']; ?></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><?php echo $tampil['username']; ?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><?php echo $tampil['password']; ?></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td>:</td>
					<td><?php echo $tampil['telppetugas']; ?></td>
				</tr>
				<tr>
					<td>Level</td>
					<td>:</td>
					<td><?php echo $tampil['level']; ?></td>
				</tr>
			</table>
			<div class="right-sign me-5 mt-5 text-center float-end" style="width:fit-content;">
                <p class="fw-bold">
                    Waktu cetak
                </p>

                <p class="mt-5" id="date">

                </p>
            </div>
            <div class="left-sign ms-5 mt-5 text-center " style="width:fit-content;">
                <p>
                    <?php echo $_SESSION['level'] . ","; ?>
                </p>

                <p class="mt-5 fw-bold">
                    <?php echo $_SESSION['user']; ?>
                </p>
            </div>

		</div>

	</div>
	<script>
		window.print();

		function back() {
			location.href = "index.php?link=t-pelanggan";
		}
	</script>
    <script src="../config/js/date.js"></script>

</body>

</html>