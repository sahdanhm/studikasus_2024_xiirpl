<link rel="stylesheet" href="../config/css/print.css">

<body onafterprint="back()">
    <div class="container-xxl">
        <div id="print">
            <h2 class="text-center">Data Pelanggan</h2>
            <h5>Toko Syahdan Kasep</h5>
            <table class="table table-bordered">

                <tr>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat Pelanggan</th>
                    <th>Nomor Telepon</th>
                </tr>
                <?php
                include "../config/koneksi.php";
                $sql = mysqli_query($koneks, "select*from pelanggan");
                while ($tampil = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td><?php echo $tampil['idpelanggan']; ?></td>
                        <td><?php echo $tampil['namapelanggan']; ?></td>
                        <td><?php echo $tampil['alamatpelanggan']; ?></td>
                        <td><?php echo $tampil['telepon']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
    <script>
        window.print();
        function back() {
            location.href = "index.php?link=t-pelanggan";
        }
    </script>
</body>

</html>