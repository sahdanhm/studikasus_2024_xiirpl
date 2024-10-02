<body onafterprint="back()">
    <div class="container">
        <div id="print">
            <h2 class="text-center">Transaction</h2>
            <h3>Syahdan Kasep</h3>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>No. Faktur</th>
                        <th>Date of Transaction</th>
                        <th>Name of Product</th>
                        <th>Amount of Product</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <?php
                include "../config/koneksi.php";
                $no = 1;
                $month = $_GET['month'];
                $year = $_GET['year'];
                $sql = mysqli_query($koneks, "select*from produk,penjualan,detailpenjualan where detailpenjualan.idproduk = produk.idproduk and detailpenjualan.idpenjualan = penjualan.idpenjualan and month(penjualan.tglpenjualan) = '$month' and year(penjualan.tglpenjualan) = '$year' order by penjualan.idpenjualan asc");
                while ($tampil = mysqli_fetch_array($sql)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tampil['idpenjualan']; ?></td>
                        <td><?php echo $tampil['tglpenjualan']; ?></td>
                        <td><?php echo $tampil['namaproduk']; ?></td>
                        <td><?php echo $tampil['jumlahproduk']; ?></td>
                        <td><?php echo $tampil['hargaproduk']; ?></td>
                        <td><?php echo $tampil['totalharga']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <form action="index.php?link=showlapen" method="post" name="myForm" id="myForm">
                <input type="number" name="months" id="months" value="<?php echo $month ?>" hidden>
                <input type="number" name="years" id="years" value="<?php echo $year ?>" hidden>
            </form>
        </div>
        <!-- <button onclick="printer()">Print</button> -->

    </div>
    <script>
        window.print();
        function back() {
            location.href = "index.php?link=showlapen";
        }


        var auto_refresh = setInterval(
            function () {
                submitform();
            }, 1000);

        function submitform() {
            document.myForm.submit();
        }
    </script>
</body>

</html>