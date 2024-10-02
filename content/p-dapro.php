<?php include "../config/koneksi.php";
$no = 1;
$sql = mysqli_query($koneks, "select*from produk");



?>

<link rel="stylesheet" href="../config/css/print.css">


<body onafterprint="back()">
    <div class="container-xxl">
        <div id="print">
            <h2 class="text-center">Data Product</h2>
            <h5>Toko Syahdan Kasep</h5>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>ID Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Stok Produk</th>
                    </tr>
                </thead>
                <?php

                while ($tampil = mysqli_fetch_array($sql)) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $tampil['idproduk']; ?></td>
                            <td><?php echo $tampil['namaproduk']; ?></td>
                            <td><?php echo "Rp." . number_format($tampil['hargaproduk'], "0", ".", "."); ?></td>
                            <td><?php echo $tampil['stok']; ?></td>
                        </tr>

                    </tbody>
                <?php } ?>
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
            location.href = "index.php?link=t-produk";
        }
      
    </script>
    <script src="../config/js/date.js"></script>
</body>

</html>