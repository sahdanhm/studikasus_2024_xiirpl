<link rel="stylesheet" href="../config/css/print.css">

<body onafterprint="back()">
    <div class="container-xxl">
        <div id="print">
            <h2 class="text-center">Data Produk</h2>
            <h5>Toko Syahdan Kasep</h5>
            <table class="table table-bordered">

                <tr>
                    <th>ID Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Stok Produk</th>

                </tr>
                <?php
                include "../config/koneksi.php";
                $sql = mysqli_query($koneks, "select*from produk");
                while ($tampil = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td><?php echo $tampil['idproduk']; ?></td>
                        <td><?php echo $tampil['namaproduk']; ?></td>
                        <td><?php echo $tampil['hargaproduk']; ?></td>
                        <td><?php echo $tampil['stok']; ?></td>
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
            location.href = "index.php?link=t-produk";
        }
    </script>
</body>

</html>